# chronos-sample

明日の日付を出力するアプリ。[Chronos](https://book.cakephp.org/chronos/2/ja/index.html) を導入することでテストが簡単になることを例示。

```bash
# アプリを使う
$ php app.php

# テストする
$ phpunit
```

## 1. テストできないパターン

* [app.php](https://github.com/ttskch/chronos-sample/blob/4030355ac9c4bbf4d7af693be1a8745f1b225ad0/app.php)
* [Tomorrow.php](https://github.com/ttskch/chronos-sample/blob/4030355ac9c4bbf4d7af693be1a8745f1b225ad0/src/Tomorrow.php)
* [TomorrowTest.php](https://github.com/ttskch/chronos-sample/blob/4030355ac9c4bbf4d7af693be1a8745f1b225ad0/tests/TomorrowTest.php#L26-L34)

## 2. Clockサービスを自作してテスト可能にしたパターン

* [app.php](https://github.com/ttskch/chronos-sample/blob/988d01b4fa9a2fa418f404c2b3d068cc4110c3ce/app.php)
* [Tomorrow.php](https://github.com/ttskch/chronos-sample/blob/988d01b4fa9a2fa418f404c2b3d068cc4110c3ce/src/Tomorrow.php)
* [Clock.php](https://github.com/ttskch/chronos-sample/blob/988d01b4fa9a2fa418f404c2b3d068cc4110c3ce/src/Clock.php)
* [TomorrowTest.php](https://github.com/ttskch/chronos-sample/blob/988d01b4fa9a2fa418f404c2b3d068cc4110c3ce/tests/TomorrowTest.php#L29-L37)

## 3. Chronosを使ってテスト可能にしたパターン

* [app.php](https://github.com/ttskch/chronos-sample/blob/93e9691132bc948b08c717707e28aab6ceddf624/app.php)
* [Tomorrow.php](https://github.com/ttskch/chronos-sample/blob/93e9691132bc948b08c717707e28aab6ceddf624/src/Tomorrow.php)
* [TomorrowTest.php](https://github.com/ttskch/chronos-sample/blob/93e9691132bc948b08c717707e28aab6ceddf624/tests/TomorrowTest.php#L27-L37)
