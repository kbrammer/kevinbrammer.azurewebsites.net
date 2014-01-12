@ECHO OFF

:BEGIN
	CALL lessc bootstrap.less > ..\css\styles.css
	CALL lessc -x bootstrap.less > ..\css\styles.min.css
	GOTO :EOF

:EOF