# api_crud_php
Base code to build a rest api in php.

## use
* php ^8.1.10
* composer 2.5.5

## postman exemples:
### GET (all):
**http://localhost/yourProjectName/public_html/api/user**

* response:
```javascript
{
    "data": [
        {
            "id": 1,
            "email": "test@test.com",
            "name": "test",
            "password": "password1"
        },
        {
            "id": 2,
            "email": "test2@test.com",
            "name": "test2",
            "password": "password2"
        },
    ]
}
```

### GET (by id):
**http://localhost/yourProjectName/public_html/api/user/:id**
* response:
```javascript
{
   "data": 
   {
      "id": 1,
      "email": "test@test.com",
      "name": "test",
      "password": "password1"
   }
}
```

### POST:
**http://localhost/yourProjectName/public_html/api/user**
* body: (raw/JSON)
```javascript
{
   "email": "test@test.com",
   "name": "test",
   "password": "password1"
}
```

* response:
```javascript
{
   "data": "User entered successfully!"
}
```

### PUT:
**http://localhost/yourProjectName/public_html/api/user/:id**
* body: (raw/JSON)
```javascript
{
   "email": "test@test.com",
   "name": "test changed",
   "password": "password1"
}
```

* response:
```javascript
{
   "data": "User changed successfully!"
}
```

### DELETE:
**http://localhost/yourProjectName/public_html/api/user/:id**
* response:
```javascript
{
   "data": "User deleted successfully!"
}
```
