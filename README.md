#CakePHP composerインストールサンプル

### 外部ライブラリ取得〜ビルトインサーバーで実行まで
```
$ cd cakeapp
$ composer install
$ cd app/webroot
$ php -S localhost:8081 index.php
```

### ソースツリー
```
project_root
└── cakeapp        ・・・webモジュールのルート
    ├── app        ・・・cakePHPの実際のアプリケーション
    ├── plugins    ・・・git管理しないComposerでいれるplugin用ディレクトリ
    └── vendors    ・・・git管理しないComposerでいれるvendors用ディレクトリ(cakePHP本体もここ）
```

