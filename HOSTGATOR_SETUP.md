# Configuração para HostGator

## Arquivos .htaccess criados

1. **`.htaccess` na raiz** - Redireciona todas as requisições para a pasta `public/`
2. **`public/.htaccess`** - Configurações do Laravel + segurança

## Configuração no HostGator

### Opção 1: DocumentRoot apontando para a pasta `public/` (Recomendado)

Se o DocumentRoot do seu domínio está configurado para apontar para a pasta `public/`:
- Use apenas o arquivo `public/.htaccess`
- O arquivo `.htaccess` na raiz não será necessário

### Opção 2: DocumentRoot na raiz do projeto

Se o DocumentRoot está na raiz do projeto:
- Use ambos os arquivos `.htaccess`
- O arquivo na raiz redireciona para `public/`

## Verificar configuração

1. Acesse o cPanel do HostGator
2. Vá em "Gerenciador de Arquivos"
3. Verifique qual é o DocumentRoot do seu domínio
4. Ajuste conforme necessário

## Permissões de arquivos e diretórios

Execute os seguintes comandos via SSH ou Terminal do cPanel:

```bash
# Permissões de diretórios
find . -type d -exec chmod 755 {} \;

# Permissões de arquivos
find . -type f -exec chmod 644 {} \;

# Permissões especiais para Laravel
chmod -R 775 storage bootstrap/cache
chmod -R 755 public
```

## Verificar PHP

1. No cPanel, vá em "Seletor de Versão do PHP" ou "MultiPHP Manager"
2. Selecione PHP 8.3 (ou 8.2, 8.4, 8.5)
3. Certifique-se de que as extensões necessárias estão habilitadas:
   - pdo
   - pdo_sqlite (ou pdo_mysql se usar MySQL)
   - mbstring
   - xml
   - curl
   - openssl
   - fileinfo
   - json

## Estrutura de diretórios no servidor

```
/
├── .htaccess (redireciona para public/)
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
│   ├── .htaccess (configurações Laravel)
│   ├── index.php
│   └── ...
├── resources/
├── routes/
├── storage/ (permissão 775)
└── vendor/
```

## Troubleshooting

### Erro 403 Forbidden
- Verifique as permissões dos arquivos e diretórios
- Certifique-se de que o `.htaccess` está presente
- Verifique se o mod_rewrite está habilitado no Apache

### Erro 500 Internal Server Error
- Verifique os logs de erro em `storage/logs/laravel.log`
- Verifique se o PHP está na versão correta (8.2+)
- Verifique se todas as extensões PHP necessárias estão instaladas

### Página em branco
- Verifique as permissões do diretório `storage/` e `bootstrap/cache/`
- Limpe o cache: `php artisan cache:clear`
- Verifique os logs de erro

