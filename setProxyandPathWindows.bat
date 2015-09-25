@echo off
set /p firstname=Enter Firstname:
set /p lastname=Enter Lastname:
set /p password=Enter Password:
set http_proxy=http://%firstname%.%lastname%:%password%@proxy:3128
set https_proxy=http://%firstname%.%lastname%:%password%@proxy:3128
cmd /K set PATH=%PATH%;C:\xampp\php
@echo on
cls