#!/bin/bash
set -e

echo "🚀 Setting up Jigsaw development environment..."


# Восстанавливаем или устанавливаем npm-модули
if [ -d /workspaces/dm_static/.cache/npm_modules ]; then
    cp -r /workspaces/dm_static/.cache/npm_modules node_modules
    echo "✅ Восстановлены node_modules из кеша."
else
    npm install -g npm@11.2.0
    echo "✅ npm install выполнен."
    cp -r node_modules /workspaces/dm_static/.cache/npm_modules
    echo "📌 node_modules сохранены в кеш."
fi

# Восстанавливаем или устанавливаем Composer-зависимости
if [ -d /workspaces/dm_static/.cache/composer ]; then
    cp -r /workspaces/dm_static/.cache/composer vendor
    echo "✅ Восстановлены vendor из кеша."
else
    composer install
    echo "✅ composer install выполнен."
    cp -r vendor /workspaces/dm_static/.cache/composer
    echo "📌 vendor сохранены в кеш."
fi

export PATH="$PATH:$(pwd)/vendor/bin"

# npm install -g npm@11.2.0

# Create basic directory structure (if needed)
echo "📁 Ensuring basic directory structure exists..."
mkdir -p source/_assets/css
mkdir -p source/_assets/js
mkdir -p source/_assets/fonts
mkdir -p source/_assets/images
mkdir -p source/assets/build
mkdir -p source/assets/images
mkdir -p source/_components
mkdir -p source/_layouts

echo "✅ Setup complete! Your Jigsaw development environment is ready."
echo "📝 To start development server: npm run serve"
echo "🔨 To build for development: npm run dev"
echo "🚀 To build for production: npm run prod"