# FeegowChallenge
Desafio Feegow Challenge

Esse é um teste focado em design de código, e conhecimento de orientação a objeto. O objetivo é avaliar sua experiênica em escrever código de fácil manutenção, baixo acoplamento, e alta coesão.

https://github.com/feegow/feegow-challenge

Como testar sistema:


1 - Basta dar o git clone e baixar o código fonte:
git clone https://github.com/dnsdigitaltech/FeegowChallenge.git

2 – Acesse a pasta FeegowChallenge no seu terminal e depois execute ose seguintes comandos

cd  FeegowChallenge → entrar na pasta

php artisan migrate → criaar as tabelas, cris seu banco e coloque as credencias no .env altere o .env.example para .env

composer update → baixa todas as dependecias para a pasta vendor

php artisan optimize → Limpa todos só caches e configurações antigas da aplicação

php artisan serve → levantará um sevidor teste para você ver o funcionamente da aplicação

basta acessar em http://localhost:8000


