# API REST - Termoo Laravel

API REST desenvolvida em Laravel para implementação do jogo Termoo.

## Funcionalidades

- Iniciar nova partida
- Validar tentativas
- Retorno em JSON
- Controle de tentativas
- Sistema de palavras aleatórias
- Integração com frontend

---

## Endpoints

### POST /api/iniciar-jogo

Retorna:

```json
{
  "idJogo": "d1a35b8e-1f09-443b-8065-e4defad35c50",
  "tamanhoPalavra": 5,
  "tentativasMaximas": 6
}
```

---

### POST /api/validar-tentativa

Recebe:

```json
{
  "idJogo": "d1a35b8e-1f09-443b-8065-e4defad35c50",
  "palavra": "carro"
}
```

Retorna:

```json
{
  "resultado": [
    {
      "letra": "c",
      "status": "ausente"
    },
    {
      "letra": "a",
      "status": "presente"
    },
    {
      "letra": "r",
      "status": "correta"
    },
    {
      "letra": "r",
      "status": "correta"
    },
    {
      "letra": "o",
      "status": "ausente"
    }
  ],
  "venceu": false,
  "tentativasRestantes": 5,
  "palavraValida": true
}
```

---

## Tecnologias Utilizadas

- PHP
- Laravel
- REST API
- JSON

---

## Como executar o projeto

### Instalar dependências

```bash
composer install
```

### Limpar cache

```bash
php artisan config:clear
php artisan cache:clear
```

### Executar com Laravel Herd

```txt
http://termoo-api.test
```

---

## Frontend utilizado

https://termorest.conradosal.com

---

## Autor

Desenvolvido para atividade acadêmica utilizando Laravel.