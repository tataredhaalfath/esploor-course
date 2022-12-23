## Getting Started

## Installation
```bash
  $ composer install
  $ php artisan serve
```

## Setup ENV
```exampe
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=course_database
  DB_USERNAME=root
  DB_PASSWORD=

  MIDTRANS_SERVER_KEY={your-midtrans-server-key}
  MIDTRANS_PRODUCTION=false
  MIDTRANS_3DS=true

  SERVICE_USER_URL=http://localhost:5000/
  SERVICE_ORDER_PAYMENT_URL=http://localhost:8001/
```
## Database Migration
```bash
  $ php artisan migrate
```

## Description
  This sevice will handle course work flow. This service can make new course with the chapters and the lessons. This service also handle about course media, data mentor, data course user, and data course review.

  This service running on laravel framework. Laravel is a web application framework with expressive, elegant syntax.

## API Documentation
- you can see the API Documentation in the api-docs.rest file

## API Contract

### MENTOR
- [Create new mentor](#create-new-mentor)
- [Update Mentor](#update-mentor)
- [Get All Mentor](#get-all-mentor)
- [Get Detail Mentor](#get-detail-mentor)
- [Delete Mentor](#delete-mentor)

### COURSES
- [Create new courses](#create-new-courses)
- [Update Coures](#update-courses)
- [Get All Courses](#get-all-courses)
- [Delete Courses](#delete-courses)

### CHAPTER
- [Create Chapters](#create-chapters)
- [Update Chapters](#update-chapters)
- [Get All Chapters](#get-all-chapters)
- [Get Detail Chapters](#get-detail-chapters)
- [Delete Chapters](#delete-chapters)

### LESSONS
- [Create Lessons](#create-lessons)
- [Update Lessons](#update-lessons)
- [Get All Lessons](#get-all-lessons)
- [Get Detail Lessons](#get-detail-lessons)
- [Delete Lessons](#delete-lessons)

### IMAGE COURSE
- [Create Image Courses](#create-image-courses)
- [Delete Image Courses](#delete-image-courses)

### MY COURSES
- [Create My Courses](#create-my-courses)
- [Get My Courses](#get-my-courses)
- [Course Premium](#course-premium)

### REVIEW
- [Create Review](#create-review)
- [Update Review](#update-review)
- [Delete Review](#delete-review)

---
### Create New Mentor

### Description
This api for create new Mentor

### Method
`POST`

### URL
```diff
{URL_API}/api/mentors
```

### Body
```diff
{
  "name":"Budi Purnomo",
  "profile":"http://localhost:8080/images/1671720840592.png",
  "profession":"backend developer",
  "email":"budip@gmail.com"
}
```
### Response
```diff
{
    "status": "success",
    "data": {
        "name": "Budi Purnomo",
        "profile": "http://localhost:8080/images/1671720840592.png",
        "profession": "backend developer",
        "email": "budip@gmail.com",
        "updated_at": "2022-12-23 04:12:12",
        "created_at": "2022-12-23 04:12:12",
        "id": 3
    }
}
```
<br>
<br>

---

### Update Mentor

### Description
This api for update data mentor

### Method
`PUT`

### URL
```diff
{URL_API}/api/mentors/{mentor_id}
```

### Params
```diff
mentor_id = [integer](required)
```

### Body
```diff
{
  "name":"Budi Purnomo Aji",
  "profile":"http://localhost:8080/images/1671720840592.png",
  "profession":"Web developer",
  "email":"budipurnomo@gmail.com"
}
```

### Response
```diff
{
    "status": "success",
    "data": {
        "id": 3,
        "name": "Budi Purnomo Aji",
        "profile": "http://localhost:8080/images/1671720840592.png",
        "email": "budipurnomo@gmail.com",
        "profession": "Web developer",
        "created_at": "2022-12-23 04:12:12",
        "updated_at": "2022-12-23 04:12:04"
    }
}
```
<br>
<br>

---

### Get All Mentor

### Description
This api for get list mentor

### Method
`GET`

### URL
```diff
{URL_API}/api/mentors
```

### Response
```diff
{
    "status": "success",
    "data": [
        {
            "id": 1,
            "name": "Kusuma Purta",
            "profile": "http://localhost:8000/images/image.png",
            "email": "kuswija@gmail.com",
            "profession": "backend developer",
            "created_at": "2022-12-22 11:12:35",
            "updated_at": "2022-12-22 11:12:54"
        },
        {
            "id": 2,
            "name": "Burhan Purnama",
            "profile": "http://localhost:8000/images/image.png",
            "email": "burhan@gmail.com",
            "profession": "backend developer",
            "created_at": "2022-12-22 13:12:52",
            "updated_at": "2022-12-22 13:12:52"
        },
        {
            "id": 3,
            "name": "Budi Purnomo Aji",
            "profile": "http://localhost:8080/images/1671720840592.png",
            "email": "budipurnomo@gmail.com",
            "profession": "Web developer",
            "created_at": "2022-12-23 04:12:12",
            "updated_at": "2022-12-23 04:12:04"
        }
    ]
}
```

<br>
<br>

---

### Get Detail Mentor

### Description
This api for get list mentor

### Method
`GET`

### URL
```diff
{URL_API}/api/mentors/{mentor_id}
```

### Params
```diff
mentor_id = [integer](required)
```

### Response
```diff
{
  "status": "success",
  "data": {
    "id": 3,
    "name": "Budi Purnomo Aji",
    "profile": "http:\/\/localhost:8080\/images\/1671720840592.png",
    "email": "budipurnomo@gmail.com",
    "profession": "Web developer",
    "created_at": "2022-12-23 04:12:12",
    "updated_at": "2022-12-23 04:12:04"
  }
}
```

<br>
<br>

---


### Delete Mentor
### Description
This api for delete mentor by id

### Method
`DELETE`

### URL
```diff
{URL_API}/api/mentors/{mentor_id}
```

### Params
```diff
mentor_id = [integer](required)
```

### Response
```diff
{
  "status": "success",
  "message": "mentor has been deleted"
}
```

<br>
<br>

---


### Create New Courses
### Description
This api for create new courses

### Method
`POST`

### URL
```diff
{URL_API}/api/courses
```

### Body
```diff
{
  "name":"Kelas Kotlin",
  "certificate":true,
  "thumbnail":"http://localhost:8080/images/1671774061403.png",
  "type":"premium",
  "status":"published",
  "price":150000,
  "level":"beginner",
  "mentor_id":1,
  "description":"Materi kotlin untuk pemula"
}
```

### Body Options
``` diff
  type = ["free","premium"]
  status = ["draft","published"]
  level = ["all-level","beginner","intermediate","advance"]
```

### Response
```diff
{
  "status": "success",
  "data": {
    "name": "Kelas Kotlin",
    "certificate": true,
    "thumbnail": "http://localhost:8080/images/1671774061403.png",
    "type": "premium",
    "status": "published",
    "price": 150000,
    "level": "beginner",
    "mentor_id": 1,
    "description": "Materi kotlin untuk pemula",
    "updated_at": "2022-12-23 05:12:43",
    "created_at": "2022-12-23 05:12:43",
    "id": 3
  }
}
```

<br>
<br>

---

### Update Courses
### Description
This api for update courses

### Method
`POST`

### URL
```diff
{URL_API}/api/courses/{courses_id}
```

### Params
```diff
courses_id = [integer](required)
```

### Body
```diff
{
  "name":"Kelas Kotlin",
  "certificate":true,
  "thumbnail":"http://localhost:8080/images/1671774061403.png",
  "type":"premium",
  "status":"published",
  "price":150000,
  "level":"beginner",
  "mentor_id":1,
  "description":"Materi kotlin untuk pemula"
}
```

### Body Options
``` diff
  type = ["free","premium"]
  status = ["draft","published"]
  level = ["all-level","beginner","intermediate","advance"]

  all field is optional update
```

### Response
```diff
{
  "status": "success",
  "data": {
    "id": 3,
    "name": "Kelas Mobile Kotlin",
    "certificate": true,
    "thumbnail": "http://localhost:8080/images/1671774061403.png",
    "type": "premium",
    "status": "published",
    "price": 150000,
    "level": "beginner",
    "description": "Materi kotlin untuk pemula",
    "mentor_id": 1,
    "created_at": "2022-12-23 05:12:43",
    "updated_at": "2022-12-23 05:12:31"
  }
}
```

<br>
<br>

---

### Get All Courses
### Description
This api for get all courses

### Method
`GET`

### URL
```diff
{URL_API}/api/courses
```

### Response
```diff
{
  "status": "success",
  "data": {
    "current_page": 1,
    "data": [
      {
        "id": 1,
        "name": "Build Website Using Express",
        "certificate": 1,
        "thumbnail": "http:\/\/localhost:8080\/images\/1671719623790.png",
        "type": "premium",
        "status": "published",
        "price": 250000,
        "level": "advance",
        "description": null,
        "mentor_id": 1,
        "created_at": "2022-12-22 13:12:24",
        "updated_at": "2022-12-22 14:12:30"
      },
      {
        "id": 2,
        "name": "Kelas Kotlin",
        "certificate": 0,
        "thumbnail": null,
        "type": "free",
        "status": "draft",
        "price": 0,
        "level": "beginner",
        "description": null,
        "mentor_id": 1,
        "created_at": "2022-12-23 05:12:09",
        "updated_at": "2022-12-23 05:12:09"
      },
      {
        "id": 3,
        "name": "Kelas Mobile Kotlin",
        "certificate": 1,
        "thumbnail": "http:\/\/localhost:8080\/images\/1671774061403.png",
        "type": "premium",
        "status": "published",
        "price": 150000,
        "level": "beginner",
        "description": "Materi kotlin untuk pemula",
        "mentor_id": 1,
        "created_at": "2022-12-23 05:12:43",
        "updated_at": "2022-12-23 05:12:49"
      }
    ],
    "first_page_url": "http:\/\/127.0.0.1:8000\/api\/courses?page=1",
    "from": 1,
    "last_page": 1,
    "last_page_url": "http:\/\/127.0.0.1:8000\/api\/courses?page=1",
    "links": [
      {
        "url": null,
        "label": "&laquo; Previous",
        "active": false
      },
      {
        "url": "http:\/\/127.0.0.1:8000\/api\/courses?page=1",
        "label": "1",
        "active": true
      },
      {
        "url": null,
        "label": "Next &raquo;",
        "active": false
      }
    ],
    "next_page_url": null,
    "path": "http:\/\/127.0.0.1:8000\/api\/courses",
    "per_page": 10,
    "prev_page_url": null,
    "to": 3,
    "total": 3
  }
}
```

<br>
<br>

---

### Get Detail Courses
### Description
This api for get detail curses

### Method
`GET`

### URL
```diff
{URL_API}/api/courses/{courses_id}
```

### Params
```diff
courses_id = [integer](required)
```

### Response
```diff
{
  "status": "success",
  "data": {
    "id": 3,
    "name": "Kelas Mobile Kotlin",
    "certificate": 1,
    "thumbnail": "http:\/\/localhost:8080\/images\/1671774061403.png",
    "type": "premium",
    "status": "published",
    "price": 150000,
    "level": "beginner",
    "description": "Materi kotlin untuk pemula",
    "mentor_id": 1,
    "created_at": "2022-12-23 05:12:43",
    "updated_at": "2022-12-23 05:12:49",
    "reviews": [],
    "total_videos": 0,
    "total_student": 0,
    "chapters": [],
    "mentor": {
      "id": 1,
      "name": "Kusuma Purta",
      "profile": "http:\/\/localhost:8000\/images\/image.png",
      "email": "kuswija@gmail.com",
      "profession": "backend developer",
      "created_at": "2022-12-22 11:12:35",
      "updated_at": "2022-12-22 11:12:54"
    },
    "images": []
  }
}
```

<br>
<br>

---

### Delete Courses
### Description
This api for delete curses

### Method
`DELETE`

### URL
```diff
{URL_API}/api/courses/{courses_id}
```

### Params
```diff
courses_id = [integer](required)
```

### Response
```diff
{
  "status": "success",
  "message": "course deleted"
}
```

<br>
<br>

---

### Create Chapters
### Description
This api crate new chapters

### Method
`POST`

### URL
```diff
{URL_API}/api/chapters/
```

### Body
```diff
{
  "name":"Sejarah Kotlin",
  "course_id":3
}
```

### Response
```diff
{
  "status": "success",
  "data": {
    "name": "Membuat API Payment",
    "course_id": 3,
    "updated_at": "2022-12-23 05:12:34",
    "created_at": "2022-12-23 05:12:34",
    "id": 7
  }
}
```

<br>
<br>

---

### Update Chapters
### Description
This api update chapters

### Method
`PUT`

### URL
```diff
{URL_API}/api/chapters/{chapters_id}
```

### Params
```diff
chapter_id = [integer](required)
```

### Body
```diff
{
  "name":"Introducion Kotlin",
  "course_id":3
}
```

### Response
```diff
{
  "status": "success",
  "data": {
    "id": 3,
    "name": "Introduction Kotlin",
    "course_id": 3,
    "created_at": "2022-12-22 13:12:56",
    "updated_at": "2022-12-23 05:12:19"
  }
}
```

<br>
<br>

---

### Get All Chapters
### Description
This api get all chapters

### Method
`GET`

### URL
```diff
{URL_API}/api/chapters
```

### Params
```diff
course_id = [integer](optional)
```

### Response
```diff
{
  "status": "success",
  "data": [
    {
      "id": 1,
      "name": "Pendahuluan",
      "course_id": 1,
      "created_at": "2022-12-22 13:12:38",
      "updated_at": "2022-12-22 13:12:38"
    },
    {
      "id": 2,
      "name": "Apa itu Backend",
      "course_id": 1,
      "created_at": "2022-12-22 13:12:45",
      "updated_at": "2022-12-22 13:12:45"
    },
    ...
  ]
}
```

<br>
<br>

---

### Get Detail Chapters
### Description
This api for get detail chapters

### Method
`GET`

### URL
```diff
{URL_API}/api/chapters/{chapters_id}
```

### Params
```diff
chapters_id = [integer](required)
```

### Response
```diff
{
  "status": "success",
  "data": {
    "id": 7,
    "name": "Introduction Kotlin",
    "course_id": 3,
    "created_at": "2022-12-23 05:12:34",
    "updated_at": "2022-12-23 05:12:48"
  }
}
```

<br>
<br>

---

### Delete Chapters
### Description
This api for delete chapters

### Method
`DELETE`

### URL
```diff
{URL_API}/api/chapters/{chapters_id}
```

### Params
```diff
chapters_id = [integer](required)
```

### Response
```diff
{
  "status": "success",
  "message": "chapter deleted"
}
```

<br>
<br>

---

### Create Lessons
### Description
This api for crate lessons

### Method
`POST`

### URL
```diff
{URL_API}/api/lessons
```

### Body
```diff
{
  "name":"Sejarah Kotlin",
  "video":"asdcasr",
  "chapter_id":8
}
```

### Body Options
```diff
all field is required
video is filled with youtube video url key
```

### Response
```diff
{
  "status": "success",
  "data": {
    "name": "Sejarah Kotlin",
    "video": "asdcasr",
    "chapter_id": 8,
    "updated_at": "2022-12-23 06:12:19",
    "created_at": "2022-12-23 06:12:19",
    "id": 4
  }
}
```

<br>
<br>

---

### Update Lessons
### Description
This api for update lessons

### Method
`PUT`

### URL
```diff
{URL_API}/api/lessons/{lessons_id}
```

### Params
```diff
lessons_id = [integer](required)
```

### Body
```diff
{
  "name":"Sejarah Kotlin",
  "video":"asdcasr",
  "chapter_id":8
}
```

### Body Options
```diff
all field is required
video is filled with youtube video url key
```

### Response
```diff
{
  "status": "success",
  "data": {
    "id": 4,
    "name": "Dasar Kotlin",
    "video": "asdcasr",
    "chapter_id": 8,
    "created_at": "2022-12-23 06:12:19",
    "updated_at": "2022-12-23 06:12:42"
  }
}
```

<br>
<br>

---

### Get All Lessons
### Description
This api for get all lessons

### Method
`GET`

### URL
```diff
{URL_API}/api/lessons
```

### Params
```diff
chapters_id = [integer](optional)
```

### Response
```diff
{
  "status": "success",
  "data": [
    {
      "id": 4,
      "name": "Dasar Kotlin",
      "video": "asdcasr",
      "chapter_id": 8,
      "created_at": "2022-12-23 06:12:19",
      "updated_at": "2022-12-23 06:12:42"
    }
    ...
  ]
}
```

<br>
<br>

---

### Get Detail Lessons
### Description
This api for get detail lessons

### Method
`GET`

### URL
```diff
{URL_API}/api/lessons/{lessons_id}
```

### Params
```diff
lessons_id = [integer](required)
```

### Response
```diff
{
  "status": "success",
  "data": {
    "id": 4,
    "name": "Dasar Kotlin",
    "video": "asdcasr",
    "chapter_id": 8,
    "created_at": "2022-12-23 06:12:19",
    "updated_at": "2022-12-23 06:12:42"
  }
}
```

<br>
<br>

---

### Delete Lessons
### Description
This api for delete lessons

### Method
`DELETE`

### URL
```diff
{URL_API}/api/lessons/{lessons_id}
```

### Params
```diff
lessons_id = [integer](required)
```

### Response
```diff
{
  "status": "success",
  "message": "lesson deleted"
}

```

<br>
<br>

---


### Create Image Courses
### Description
This api for crate image courses

### Method
`POST`

### URL
```diff
{URL_API}/api/image-courses
```

### Body
```diff
{
  "image":"http://localhost:8080/images/1671774061403.png",
  "course_id":3
}
```

### Response
```diff
{
  "status": "success",
  "data": {
    "image": "http:\/\/localhost:8080\/images\/1671774061403.png",
    "course_id": 3,
    "updated_at": "2022-12-23 06:12:04",
    "created_at": "2022-12-23 06:12:04",
    "id": 2
  }
}
```

<br>
<br>

---

### Delete Image Courses
### Description
This api for delete image courses

### Method
`POST`

### URL
```diff
{URL_API}/api/image-courses/{image_courses_id}
```

### Params
```diff
image_courses_id = [integer](optional)
```

### Response
```diff
{
  "status": "error",
  "messag": "Image Course Deleted"
}
```

<br>
<br>

---

### Create My Courses
### Description
This api for create order courses

### Method
`POST`

### URL
```diff
{URL_API}/api/my-courses
```

### Body
```diff
{
  "course_id":3,
  "user_id":5
}
```

### Response
```diff
{
  "status": "success",
  "data": {
    "user_id": 5,
    "course_id": 3,
    "updated_at": "2022-12-23 06:12:25",
    "created_at": "2022-12-23 06:12:23",
    "id": 4,
    "snap_url": "https:\/\/app.sandbox.midtrans.com\/snap\/v3\/redirection\/f5a1c27c-aa2d-46cc-a4af-5e763bc22061",
    "metadata": {
      "course_id": 3,
      "course_price": 150000,
      "course_name": "Kelas Mobile Kotlin",
      "course_thumbnail": "http:\/\/localhost:8080\/images\/1671774061403.png",
      "level": "beginner"
    }
  }
}
```

<br>
<br>

---


### Get My Courses
### Description
This api for get my courses

### Method
`GET`

### URL
```diff
{URL_API}/api/my-courses
```

### Params
```diff
user_id = [integer](optional)
```

### Response
```diff
{
  "status": "success",
  "data": [
    {
      "id": 1,
      "course_id": 1,
      "user_id": 1,
      "created_at": "2022-12-22 13:12:43",
      "updated_at": "2022-12-22 13:12:43",
      "course": {
        "id": 1,
        "name": "Build Website Using Express",
        "certificate": 1,
        "thumbnail": "http:\/\/localhost:8080\/images\/1671719623790.png",
        "type": "premium",
        "status": "published",
        "price": 250000,
        "level": "advance",
        "description": null,
        "mentor_id": 1,
        "created_at": "2022-12-22 13:12:24",
        "updated_at": "2022-12-22 14:12:30"
      }
    }
  ]
}
```

<br>
<br>

---

### Course Premium
### Description
This api for create premium course order

### Method
`POST`

### URL
```diff
{URL_API}/api/my-courses/premium
```

### Body
```diff
{
  "user_id":5,
  "course_id":3
}
```

### Response
```diff
{
  "status": "success",
  "data": {
    "user_id": 5,
    "course_id": 3,
    "updated_at": "2022-12-23 06:12:19",
    "created_at": "2022-12-23 06:12:19",
    "id": 3
  }
}
```

<br>
<br>

---

### Create Review
### Description
This api for create new review about course

### Method
`POST`

### URL
```diff
{URL_API}/api/reviews
```

### Body
```diff
{
  "user_id":5,
  "course_id":3,
  "rating":5,
  "note":"kelasnya keren bingit" 
}
```

### Response
```diff
{
  "status": "success",
  "data": {
    "user_id": 5,
    "course_id": 3,
    "rating": 5,
    "note": "kelasnya keren bingit",
    "updated_at": "2022-12-23 06:12:16",
    "created_at": "2022-12-23 06:12:16",
    "id": 2
  }
}
```

<br>
<br>

---

### Update Review
### Description
This api for update review about course

### Method
`PUT`

### URL
```diff
{URL_API}/api/reviews/{reviews_id}
```

### Params
```diff
reviews_id = [integer](required)
```

### Body
```diff
{
  "rating":3,
  "note":"keren"
}
```

### Response
```diff
{
  "status": "success",
  "data": {
    "id": 2,
    "user_id": 5,
    "course_id": 3,
    "rating": 3,
    "note": "keren",
    "created_at": "2022-12-23 06:12:16",
    "updated_at": "2022-12-23 06:12:41"
  }
}
```

<br>
<br>

---

### Delete Review
### Description
This api for delete review about course

### Method
`DELETE`

### URL
```diff
{URL_API}/api/reviews/{reviews_id}
```

### Params
```diff
reviews_id = [integer](required)
```

### Response
```diff
{
  "status": "success",
  "message": "Review deleted"
}
```

<br>
<br>

---