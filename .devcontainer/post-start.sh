#!/bin/bash
set -e

echo "🔄 Checking for dependency updates..."

# Check for composer.json updates
if [ composer.json -nt vendor/composer/installed.json 2>/dev/null ]; then
  echo "📦 Composer dependencies need updating..."
  composer install
fi

# Check for package.json updates
if [ package.json -nt node_modules/.package-lock.json 2>/dev/null ]; then
  echo "📦 NPM dependencies need updating..."
  npm install -g npm@11.2.0
fi

echo "✅ Environment is ready! You can start developing now."