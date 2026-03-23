<?php

class  NotificationFactory
{
    public static function notify($mode)
    {
        switch ($mode) {
            case 'Email':
                return new EmailNotification();
            case 'Log':
                return new LogNotification();
            case 'Discord':
                return new DiscordNotification();
        }
    }
}
