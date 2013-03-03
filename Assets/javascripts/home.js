(function ($, window, undefined) {
    //http://www.knockmeout.net/2011/06/10-things-to-know-about-knockoutjs-on.html

    function AppViewModel() {

        // Data
        var self = this;
        self.ghevents = ko.observable();

        // Load initial state from server
        jQuery.ajax({
            url: "/api/GitHub",
            success: function (data) {
                self.ghevents(data);
            },
            dataType: "json"
        });

    } //end view model

    // Activates knockout.js
    ko.applyBindings(new AppViewModel());

})(jQuery, this);
