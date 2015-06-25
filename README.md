#CakePHP composerインストールサンプル

### 外部ライブラリ取得〜ビルトインサーバーで実行まで
```
$ composer update
$ cd app/webroot
$ php -S localhost:8080
```

### ソースツリー
```
project_root
└── cakeapp        ・・・webモジュールのルート
    ├── app        ・・・cakePHPの実際のアプリケーション
    ├── plugins    ・・・git管理しないComposerでいれるplugin用ディレクトリ
    └── vendors    ・・・git管理しないComposerでいれるvendors用ディレクトリ(cakePHP本体もここ）
```

