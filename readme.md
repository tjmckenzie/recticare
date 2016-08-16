# RectiCare Website

## Database Requirements
This project requires a database to be setup within the .env file

## Queued Jobs
This project utilized queueing to speed up events. Both Contact messages and Sample Requests are queued jobs.
Recommended using Beanstalkd for queueing, which can be easily setup via Forge.

## Sending Email
Email drivers are configurable to use anything (sendmail, smtp, etc) but it is recommended to use SparkPost for guaranteed deliverability.
SparkPost required DNS entried to verify domain names.