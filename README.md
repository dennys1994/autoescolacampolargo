- Erros: estava dando erro no servidor de produção ao salvar arquivos, nao consigeguia acessar, o problema era a criacao do link da pasta storage e as permissões:
chmod -R 775 storage
chmod -R 775 public/storage