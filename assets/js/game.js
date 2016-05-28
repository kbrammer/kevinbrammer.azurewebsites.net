(function () {
    "use strict";

    //http://phaser.io/docs/2.4.8/Phaser.Game.html

    var game = new Phaser.Game(800, 600, Phaser.AUTO, 'mygame', {
        preload: preload,
        create: create,
        update: update,
        render: render
    });

    function preload() {
        game.load.image('bullet', 'assets/images/bullet.png');
        game.load.image('enemyBullet', 'assets/images/enemy-bullet-2.png');
        game.load.spritesheet('invader', 'assets/images/invader32x32x4b.png', 32, 32);
        game.load.image('ship', 'assets/images/space-ship.png');
        game.load.spritesheet('kaboom', 'assets/images/explode.png', 128, 128);
        game.load.image('starBackground', 'assets/images/star-background.png');
        game.load.image('spaceStation', 'assets/images/space-station.png');
        game.load.audio('explosion', 'assets/audio/explosion.mp3');
        game.load.audio('alienDeath', 'assets/audio/alien_death1.wav');
        game.load.audio('blaster', 'assets/audio/blaster.mp3');
        game.load.audio('lazer', 'assets/audio/lazer.wav');
    }

    var self = this;

    var colors = {
        purple: '#4B00FF',
        white: '#FFF',
        red: '#F00'
    };

    var player;
    var bullet;
    var bullets;
    var bulletTime = 0;
    var lives;

    var aliens;
    var enemyBullet;
    var enemyBullets;
    var livingEnemies = [];

    var cursors;
    var fireButton;
    var firingTimer = 0;
    var explosions;
    var starBackground;
    var spaceStation;

    var score = 0;
    var scoreText;
    var stateText;
    var stateSubText;

    //http://phaser.io/examples/v2/audio/sound-complete
    var audio = {
        ready: false,
        explosion: {},
        blaster: {},
        lazer: {},
        alienDeath: {}
    };

    document.getElementById("pause-btn").onclick = function (e) {
        e.preventDefault();
        var btn = this;
        if (game.paused) {
            btn.innerHTML = "<i class=\"glyphicon glyphicon-play\"></i>";
        } else {
            btn.innerHTML = "<i class=\"glyphicon glyphicon-pause\"></i>";
        }
        game.paused = !game.paused;
    };

    document.getElementById("restart-btn").onclick = function (e) {
        e.preventDefault();
        restart();
        game.paused = false;
    };

    function create() {
        audio.explosion = game.add.audio('explosion');
        audio.blaster = game.add.audio('blaster');
        audio.lazer = game.add.audio('lazer');
        audio.alienDeath = game.add.audio('alienDeath');

        //  Being mp3 files these take time to decode, so we can't play them instantly
        //  Using setDecodedCallback we can be notified when they're ALL ready for use.
        //  The audio files could decode in ANY order, we can never be sure which it'll be.
        game.sound.setDecodedCallback([audio.explosion, audio.blaster, audio.alienDeath, audio.lazer], start, self);

        game.physics.startSystem(Phaser.Physics.ARCADE);

        //  The scrolling starfield background
        starBackground = game.add.tileSprite(0, 0, 800, 600, 'starBackground');
        spaceStation = game.add.tileSprite(0, 0, 800, 600, 'spaceStation');

        //  Our bullet group
        bullets = game.add.group();
        bullets.enableBody = true;
        bullets.physicsBodyType = Phaser.Physics.ARCADE;
        bullets.createMultiple(30, 'bullet');
        bullets.setAll('anchor.x', 0.5);
        bullets.setAll('anchor.y', 1);
        bullets.setAll('outOfBoundsKill', true);
        bullets.setAll('checkWorldBounds', true);

        // The enemy's bullets
        enemyBullets = game.add.group();
        enemyBullets.enableBody = true;
        enemyBullets.physicsBodyType = Phaser.Physics.ARCADE;
        enemyBullets.createMultiple(30, 'enemyBullet');
        enemyBullets.setAll('anchor.x', 0.5);
        enemyBullets.setAll('anchor.y', 1);
        enemyBullets.setAll('outOfBoundsKill', true);
        enemyBullets.setAll('checkWorldBounds', true);

        //  The hero!
        player = game.add.sprite(400, 500, 'ship');
        player.anchor.setTo(0.5, 0.5);
        game.physics.enable(player, Phaser.Physics.ARCADE);

        //  The baddies!
        aliens = game.add.group();
        aliens.enableBody = true;
        aliens.physicsBodyType = Phaser.Physics.ARCADE;

        createAliens();

        //  The score
        game.add.text(10, 10, "1UP", { font: '20px emulogic', fill: colors.purple });
        scoreText = game.add.text(10, 35, score, { font: '20px emulogic', fill: colors.white });

        // High score
        game.add.text(game.world.centerX - 100, 10, "High Score", { font: '20px emulogic', fill: colors.red });
        game.add.text(game.world.centerX - 100, 35, "300000", { font: '20px emulogic', fill: colors.white });

        //  Lives
        lives = game.add.group();

        //  Text
        stateText = game.add.text(game.world.centerX, game.world.centerY, ' ', { font: '64px emulogic', fill: colors.white });
        stateText.anchor.setTo(0.5, 0.5);
        stateText.visible = false;
        // console.log(stateText);

        stateSubText = game.add.text(game.world.centerX, game.world.centerY + 50, ' ', { font: '24px emulogic', fill: colors.purple });
        stateSubText.anchor.setTo(0.5, 0.5);
        stateSubText.visible = false;

        for (var i = 0; i < 3; i++) {
            var ship = lives.create(game.world.width - 100 + 35 * i, 20, 'ship');
            ship.anchor.setTo(0.5, 0.5);
            ship.angle = 90;
            ship.alpha = 0.4;
        }

        //  An explosion pool
        explosions = game.add.group();
        explosions.createMultiple(30, 'kaboom');
        explosions.forEach(setupInvader, self);

        //  And some controls to play the game with
        cursors = game.input.keyboard.createCursorKeys();
        fireButton = game.input.keyboard.addKey(Phaser.Keyboard.SPACEBAR);
    }

    function start() {
        audio.ready = true;
    }

    function createAliens() {

        for (var y = 0; y < 4; y++) {
            for (var x = 0; x < 10; x++) {
                var alien = aliens.create(x * 48, y * 50, 'invader');
                alien.anchor.setTo(0.5, 0.5);
                alien.animations.add('fly', [0, 1, 2, 3], 20, true);
                alien.play('fly');
                alien.body.moves = false;
            }
        }

        aliens.x = 100;
        aliens.y = 50;

        //  All this does is basically start the invaders moving. Notice we're moving the Group they belong to, rather than the invaders directly.
        //http://phaser.io/docs/2.4.4/Phaser.Tween.html#to
        // var tween = game.add.tween(aliens).to({ x: 200 }, 2000, Phaser.Easing.Linear.None, true, 0, 1000, true);
        //to(properties, duration, ease, autoStart, delay, repeat, yoyo)
        var tween = game.add.tween(aliens).to({ x: 200 }, 2000, Phaser.Easing.Linear.None, true, 0, -1, true);

        //  When the tween loops it calls descend
        tween.onLoop.add(descend, self);
    }

    function setupInvader(invader) {

        invader.anchor.x = 0.5;
        invader.anchor.y = 0.5;
        invader.animations.add('kaboom');
    }

    function descend() {
        aliens.y += 10;
    }

    function update() {

        //  Scroll the background
        starBackground.tilePosition.y += 0.25;
        spaceStation.tilePosition.y += 0.7;

        if (player.alive) {
            //  Reset the player, then check for movement keys
            player.body.velocity.setTo(0, 0);

            if (cursors.left.isDown) {
                player.body.velocity.x = -200;
            } else if (cursors.right.isDown) {
                player.body.velocity.x = 200;
            }

            //  Firing?
            if (fireButton.isDown) {
                fireBullet();
            }

            if (game.time.now > firingTimer) {
                enemyFires();
            }

            //  Run collision
            game.physics.arcade.overlap(bullets, aliens, playerShootsEnemy, null, self);
            game.physics.arcade.overlap(player, aliens, playerHitsEnemy, null, self);
            game.physics.arcade.overlap(enemyBullets, player, enemyShootsPlayer, null, self);
        }
    }

    function render() {

        // for (var i = 0; i < aliens.length; i++)
        // {
        //     game.debug.body(aliens.children[i]);
        // }

    }

    function playerShootsEnemy(bullet, alien) {

        //  When a bullet hits an alien we kill them both
        bullet.kill();
        alien.kill();

        //  Increase the score
        score += 20;
        scoreText.text = score;

        explodeEnemy(alien);
        countEnemyLiving();
    }

    function playerHitsEnemy(player, alien) {

        //  When a player hits an alien we kill them both
        player.kill();
        alien.kill();

        //  Increase the score
        score += 20;
        scoreText.text = score;

        explodeEnemy(alien);
        explodePlayer(player);
        countEnemyLiving();
        countPlayerLiving(player);
    }

    function enemyShootsPlayer(player, bullet) {

        bullet.kill();

        var life = lives.getFirstAlive();

        if (life) {
            life.kill();
        }

        explodePlayer(player);
        countPlayerLiving(player);
    }

    function explodeEnemy(alien) {
        //  And create an explosion :)
        var explosion = explosions.getFirstExists(false);
        explosion.reset(alien.body.x, alien.body.y);
        explosion.play('kaboom', 30, false, true);

        if (audio.ready) audio.alienDeath.play();
    }

    function explodePlayer(player) {
        //  And create an explosion :)
        var explosion = explosions.getFirstExists(false);
        explosion.reset(player.body.x, player.body.y);
        explosion.play('kaboom', 30, false, true);

        if (audio.ready) audio.explosion.play();
    }

    function countPlayerLiving(player) {
        // When the player dies
        if (lives.countLiving() < 1) {
            player.kill();
            enemyBullets.callAll('kill');

            stateText.style.fill = colors.red;
            stateText.text = "GAME OVER";
            stateText.visible = true;
            stateSubText.text = "Click to restart";
            stateSubText.visible = true;

            //the "click to restart" handler
            game.input.onTap.addOnce(restart, self);
        }
    }

    function countEnemyLiving() {
        if (aliens.countLiving() === 0) {
            score += 1000;
            scoreText.text = score;

            enemyBullets.callAll('kill', self);

            stateText.style.fill = colors.white;
            stateText.text = "You Won!!";
            stateText.visible = true;
            stateSubText.text = "Click to restart";
            stateSubText.visible = true;

            //the "click to restart" handler
            game.input.onTap.addOnce(restart, self);
        }
    }

    function enemyFires() {

        //  Grab the first bullet we can from the pool
        enemyBullet = enemyBullets.getFirstExists(false);

        livingEnemies.length = 0;

        aliens.forEachAlive(function (alien) {
            // put every living enemy in an array
            livingEnemies.push(alien);
        });

        if (enemyBullet && livingEnemies.length > 0) {

            var random = game.rnd.integerInRange(0, livingEnemies.length - 1);

            // randomly select one of them
            var shooter = livingEnemies[random];

            // And fire the bullet from this enemy
            enemyBullet.reset(shooter.body.x, shooter.body.y);

            game.physics.arcade.moveToObject(enemyBullet, player, 120);
            firingTimer = game.time.now + 2000;

            if (audio.ready) audio.lazer.play();
        }
    }

    function fireBullet() {

        //  To avoid them being allowed to fire too fast we set a time limit
        if (game.time.now > bulletTime) {
            //  Grab the first bullet we can from the pool
            bullet = bullets.getFirstExists(false);

            if (bullet) {
                //  And fire it
                bullet.reset(player.x, player.y + 8);
                bullet.body.velocity.y = -400;
                bulletTime = game.time.now + 200;

                if (audio.ready) audio.blaster.play();
            }
        }
    }

    function resetBullet(bullet) {

        //  Called if the bullet goes out of the screen
        bullet.kill();
    }

    function restart() {

        //  A new level starts

        //resets the life count
        lives.callAll('revive');
        //  And brings the aliens back from the dead :)
        aliens.removeAll();
        createAliens();

        //revives the player
        player.revive();

        //hides the text
        stateText.visible = false;
        stateSubText.visible = false;
    }
})();