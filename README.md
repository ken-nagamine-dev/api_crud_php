# api_crud_php
Base code to build a rest api in php.

## use
* php ^8.1.10
* composer 2.5.5

### php local server
* php -S localhost:5000 -t public_html

## postman exemples:
### GET (all):
**http://localhost:5000/api/user**

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
**http://localhost:5000/api/user/:id**
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
**http://localhost:5000/api/user**
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
**http://localhost:5000/api/user/:id**
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
**http://localhost:5000/api/user/:id**
* response:
```javascript
{
   "data": "User deleted successfully!"
}
```
