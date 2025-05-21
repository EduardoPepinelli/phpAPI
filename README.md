# Minha Jornada Backend & FullStack

Este repositório marca o início da minha imersão no mundo backend, começando com PHP para construir APIs simples e funcionais.

## Sobre o Projeto

- **Objetivo atual:** Criar APIs básicas para aprender os fundamentos do backend.  
- **Visão futura:** Evoluir este projeto para um backend completo de e-commerce.  
- **Próximos passos:** Desenvolver um frontend moderno utilizando Next.js, integrando tudo para formar um sistema FullStack robusto.

## Tecnologias utilizadas

- PHP (backend)  
- Next.js (frontend)

## API PHP Básica

```php
<?php
// arquivo: api/index.php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/api/hello') {
    echo json_encode(['message' => 'Olá, mundo! API funcionando.']);
} else {
    http_response_code(404);
    echo json_encode(['error' => 'Endpoint não encontrado']);
}
