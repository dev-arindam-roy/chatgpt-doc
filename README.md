# Open AI and ChatGPT Documentation

### Helpful documentation for OpenAI and ChatGPT.

## Installation

> **No dependency on PHP version and LARAVEL version**

### STEP 1: Run the composer command:

```shell
composer require chatgpt/doc
```

### STEP 2: Laravel without auto-discovery:

If you don't use auto-discovery, add the ServiceProvider to the providers array in config/app.php

```php
ChatGPT\Doc\ChatGPTDoc::class,
```

## How to use?: It's Very Easy

> **DIRECT USE BY ROUTE**
---
<dl>
  <dt>>> <code>Just install and run the below route </span></code></dt>
</dl>

```php
Ex: http://your-website/chatgpt-doc

Ex: http://localhost:8000/chatgpt-doc
```

