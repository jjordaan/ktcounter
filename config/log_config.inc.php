<?php
log4php.appender.default = LoggerAppenderDailyFile
log4php.appender.default.layout = LoggerLayoutTTCC
log4php.appender.default.datePattern = Ymd
log4php.appender.default.file = LOG4PHP_LOG
log4php.rootLogger = DEBUG, default
?>