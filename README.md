
# Setup project

1. Run `composer install`
2. Create `.env.local` file and add `MESSENGER_TRANSPORT_DSN` variable value
3. Run `php bin/console app:send-message` command to send sample message
4. Run `php bin/console messenger:consume async -vv` to read message from queue