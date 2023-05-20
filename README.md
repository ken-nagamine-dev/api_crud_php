# api_crud_php
Base code to build a rest api in php.

## use
* php ^8.1.10
* composer 2.5.5


## postman exemples:

### get all:
** http://localhost/yourProjectName/public_html/api/user **

```javascript
{
    "data": [
        {
            "id": 1,
            "email": "teste@ehh.com.br",
            "name": "teste 12",
            "password": "outro correto?"
        },
        {
            "id": 2,
            "email": "testeee@ehh.com.br",
            "name": "teste 25144",
            "password": "outro teste correto?"
        },
    ]
}
```