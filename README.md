# Autor:Paulo Sanda

# Email:paulosanda@gmail.com

# Instruções

<p> Após clonar este repositório, entre na pasta do projeto e execute os seguintes comandos:</p>
<ul>
    <li><code>composer install (é preciso ter o composer instalado)</code></li>
    <li><code>cp .env.example .env</code></li>
    <li>No arquivo .env que acabou de criar edite:
    <ul>
        <li><code>DB_HOST=mysql</code></li>
        <li><code>DB_USERNAME=sail</code></li>
        <li><code>DB_PASSWORD=password</code></li>
        <li>Em <code>FEEGOW_TOKEN=</code> insira seu token para API FEEGOW</li>
    </ul>
    <li>Suba o sail <code>./bin/vendor/sail up -d</code></li>
    <li>Verifique o CONTAINER ID do sail usando o comando <code>docker ps</code> e copie</li>
    <li>Entre no container <code>docker exec -it "containerid" bash</code></li>
    <li>Execute no bash do container os seguintes comandos:</li>
    <ul>
        <li><code>php artisan key:generate</code></li>
        <li><code>php artisan migrate</code></li>
        <li><code>php artisan l5-swagger:generate</code></li>
    </ul>
</ul>

<p>A documentação desta API está em <code>http://localhost/api/documentation</code>.</p>

<ul>
    <li>Na aba <b>Sources</b> crie uma ou mais sources usando "Cadastra source", você pode verificar a(s) source(s) criadas em "Carrega sources"</li>
    <li>Para carregar da API FEEGOW as especialidades use a aba <b>Especialidades</b> usando o GET Carrega especialidades</li>
    <li>Para carregar os profissionais de uma determinada especialidade use a aba <b>Profissionais</b> em GET Carrega profissionais por especialidade</li>
    <li>Na aba <b>Prospect</b> faça a prévia de agendamento em "POST Cadastra prospect"</li>
</ul>
