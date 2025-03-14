# TOTARRY - 模写コーディング

## プロジェクト概要

このプロジェクトは、[CodeJump様](https://www.codejump.com/) の模写コーディングです。
HTML/CSSの学習を目的として、デザインカンプを元にコーディングしました。

## スクリーンショット

現在製作中です。

## 使用技術

- Laravel
- Blade (Laravelのテンプレートエンジン)
- CSS
- Docker

## インストール方法

1. **リポジトリをクローン**
    
    ```
    git clone <https://github.com/srgnair/Recipe-Diary.git>
    cp .env.example .env
    cd Recipe-Diary
    
    ```
    
2. 環境変数の設定 (.env のコピー)
    
    ```
    cp .env.example .env
    
    ```
    
3. コンテナ作成 & 起動
    
    ```
    docker compose up -d --build
    
    ```
    
4. 依存関係のインストール
    
    ```
    docker compose exec app composer install
    docker compose exec app php artisan key:generate
    
    ```
    
5. [http://localhost](http://localhost/) にアクセス

## ライセンス

このプロジェクトは学習目的のため、商用利用はご遠慮ください。
# TOTARRY
