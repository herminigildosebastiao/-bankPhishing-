<?php
    namespace App;

use TelegramBot\Api\BotApi;

    class Notification{
        public static function senderMessage(string $content): bool
        {
            try {
                $telegram = new BotApi(TELEGRAM_TOKEN);
                $telegram->sendMessage(CHAT_ID, $content);
                return true;
            } catch (\Throwable $th) {
                var_dump($th->getMessage());
                return false;
            }
        }
    }