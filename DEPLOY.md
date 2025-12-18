# Instruções de Deploy para HostGator

## Problema: Vite tentando usar dev server em produção

O erro `ERR_CONNECTION_REFUSED` na porta 5173 acontece porque o Laravel está tentando usar o Vite dev server em produção.

## Solução

### 1. Compilar os assets ANTES de fazer upload

No seu ambiente local, execute:

```bash
npm run build
```

Isso vai gerar os arquivos compilados em `public/build/`

### 2. Remover arquivo `public/hot` se existir

O arquivo `public/hot` indica que o Vite dev server está rodando. Em produção, esse arquivo NÃO deve existir.

```bash
# Se existir, remova:
rm -f public/hot
```

### 3. Verificar estrutura de arquivos no servidor

Certifique-se de que os seguintes arquivos/diretórios existem:
- `public/build/manifest.json`
- `public/build/assets/` (com os arquivos CSS e JS compilados)
- `public/.htaccess`
- `.htaccess` na raiz (se DocumentRoot não aponta para public/)

### 4. Configurar APP_ENV no servidor

No arquivo `.env` do servidor, certifique-se de que:

```env
APP_ENV=production
APP_DEBUG=false
```

### 5. Limpar cache após deploy

No servidor, execute:

```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
php artisan config:cache
```

## Checklist de Deploy

- [ ] Executar `npm run build` localmente
- [ ] Verificar que `public/build/manifest.json` existe
- [ ] Verificar que `public/build/assets/` tem os arquivos CSS e JS
- [ ] Remover `public/hot` se existir
- [ ] Fazer upload de TODOS os arquivos para o servidor
- [ ] Configurar `.env` com `APP_ENV=production`
- [ ] Limpar todos os caches no servidor
- [ ] Verificar permissões (755 para diretórios, 644 para arquivos)

## Estrutura esperada no servidor

```
algoritmux.com/
├── .htaccess (redireciona para public/)
├── app/
├── bootstrap/
├── config/
├── public/
│   ├── .htaccess
│   ├── build/
│   │   ├── manifest.json
│   │   └── assets/
│   │       ├── app-*.css
│   │       ├── app-*.js
│   │       └── ...
│   ├── images/
│   ├── videos/
│   └── index.php
├── resources/
├── routes/
├── storage/
└── vendor/
```

## Script de Deploy Automatizado

Execute o script `deploy.sh` antes de fazer upload:

```bash
./deploy.sh
```

Este script:
- Compila os assets automaticamente
- Remove o arquivo `hot` se existir
- Verifica se tudo está correto

## Se ainda der erro

1. **No servidor, verifique se o arquivo `public/hot` existe e remova-o:**
   ```bash
   rm -f public/hot
   ```

2. **Verifique se `public/build/manifest.json` existe no servidor**

3. **No servidor, configure o `.env` corretamente:**
   ```env
   APP_ENV=production
   APP_DEBUG=false
   ```

4. **No servidor, limpe todos os caches:**
   ```bash
   php artisan config:clear
   php artisan cache:clear
   php artisan view:clear
   php artisan route:clear
   php artisan config:cache
   ```

5. **Verifique as permissões dos arquivos:**
   ```bash
   chmod -R 755 storage bootstrap/cache
   chmod -R 644 public/build/assets/*
   ```

