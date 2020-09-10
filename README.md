# Slack Bot


## API

```php
new SlackBot($channel, $access_token[, $service_url]);
```



## Usage

```php
$bot = new \tpkn\SlackBot('XXXXXXXXX', 'xoxb-AAAAAAAAAAAA-BBBBBBBBBBBB-CCCCCCCCCCCCCCCCCCCCCCCC');
$response = $bot->say('chiki-briki!');
```



### @return

```
Array
(
   [ok] => 1
   [channel] => XXXXXXXXX
   [ts] => 1580801069.000900
   [message] => Array
      (
         [bot_id] => XXXXXXXXX
         [type] => message
         [text] => chiki-briki!
         [user] => BBBBBBBBB
         [ts] => 1580801069.000900
         [team] => UUUUUUUUU
         [bot_profile] => Array
            (
               [id] => XXXXXXXXX
               [deleted] => 
               [name] => my-reports
               [updated] => 1580221012
               [app_id] => HHHHHHHHH
               [team_id] => UUUUUUUUU
            )
      )
)
```

```
Array
(
   [ok] => 
   [error] => invalid_auth
)
```

