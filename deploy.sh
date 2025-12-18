#!/bin/bash

# Script de Deploy para HostGator
# Este script prepara o projeto para produção

echo "🚀 Preparando projeto para deploy..."

# 1. Compilar assets do Vite
echo "📦 Compilando assets..."
npm run build

# 2. Remover arquivo hot se existir (indica que dev server está rodando)
echo "🗑️  Removendo arquivo hot..."
rm -f public/hot

# 3. Verificar se os assets foram compilados
if [ ! -f "public/build/manifest.json" ]; then
    echo "❌ ERRO: manifest.json não encontrado! Execute 'npm run build' primeiro."
    exit 1
fi

echo "✅ Assets compilados com sucesso!"
echo ""
echo "📋 Próximos passos:"
echo "1. Faça upload de TODOS os arquivos para o servidor"
echo "2. No servidor, configure APP_ENV=production no .env"
echo "3. No servidor, execute: php artisan config:clear && php artisan cache:clear"
echo "4. Verifique se o arquivo public/hot NÃO existe no servidor"

