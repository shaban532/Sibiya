---
title: Mini DLNA مینی دی ال ان اِی؛ اشتراک گذاری فیلم، عکس و موسیقی در شبکه خانگی
metadata: 
    description: ساخت یک شبکه دی ال ان ای dlna و به اشتراک گذاری مدیا فیلم ویدیو عکس تصویر موسیقی صوتی در شبکه خانگی با minidlna مینی دی ال ان ای روی رزبری پای Raspberry pi
progress_bar: 1
pdate: پنجشنبه ۲۴ اسفند ۱۴۰۲
taxonomy:
    tag: [ منبع_باز , هنر , فیلم , موسیقی , عکس , نرم_افزار , raspberry_pi  ]
structure: BlogPosting
datePublished: 2024-03-14T15:50:46+03:30
---
![ نصب مینی دی ال ان ای MiniDLNA روی یک دستگاه رزبری پای ](2024-03-14-114002_1920x1080_scrot.webp?classes=center&loading=lazy)
<div class="align-center">
</div>

این نوشته حاصل تجربهٔ چند سالهٔ من در اشتراک گذاری فیلم و موسیقی در یک شبکهٔ خانگی است.

در یک شبکهٔ خانگی می‌توان با استفاده از پروتکل‌های
smb
,
ftp
و ... فایل‌ها را میان دستگاه‌های مختلف به اشتراک گذاشت.

اما اگر به دنبال روشی هستید تا محتوای چندرسانه‌ای خود ( ویدیو ، تصویر و موسیقی) را به اشتراک بگذارید 
dlna
شاید انتخاب بهتری باشد.

## دی ال ان ای چگونه کار می‌کند؟

من در خانه‌ام یک رزبری پای دارم. روی این رزبری پای حجم زیادی از محتوای چندرسانه‌ای وجود دارد. همچنین ما در خانهٔ‌مان تعدادی تلفن همراه هوشمند، تلویزیون، تبلت و لب‌تاب داریم.

هدف این است که بتوانم بستری ایجاد کنم که به ساده‌ترین روش ممکن بتوانم از روی هر کدام از دستگاه‌ها، ویدیو‌ها و موسیقی‌هایی که روی رزبری پای ذخیره کرده‌ام را تماشا کنم. 

## باید چه کار کنم؟

پیش از هر چیزی باید یک شبکهٔ خانگی داشته باشم. با حضور یک مودم اینترنت کار تمام است. کافی است که هر وسیله‌ای که می‌خواهم از آن استفاده کنم را به مودم متصل کنم. 

اگر یک مودم نداشته باشم رزبری پای خودش می‌تواند به عنوان یک روتر شبکه عمل کند. اما توصیه نمی‌کنم. تهیه یک مودم هزینه چندای ندارد.

قدم دوم نصب یک نرم افزار برای ساخت سرور دی ال ان ای است. شاید نام
Kodi
را شنیده باشید. 

Kodi
در حال حاضر معروف‌ترین و قوی‌ترین ابزار برای ساخت یک مدیا سنتر است.

حتی یک سیستم عامل به نام
LiberELEC
وجود دارد که شما می‌توانید آن را روی کامپیوترتان نصب کنید تا کامپیوترتان فقط یک مدیا سنتر باشد نه هیچ چیز دیگر. 

با نصب 
LiberELEC
کامپیوتر شما فقط 
Kodi دارد!

Kodi 
زیادی پیچیده است. قابلیت‌هایی دارد که من از آنها استفاده نمی‌کنم. برای همین سه چهار سال پیش 
miniDLNA
را پیدا کردم که در مقابل 
Kodi
یک شوخی محسوب می‌شود. اما صبر کنید. گاهی کمی شوخی بد نیست! 

## miniDLNA 
چگونه کار می‌کند؟

خیلی ساده!

کافی است آن را نصب کنید:
```
sudo apt install miniDLNA
```
یک پوشه به طور پیش‌فرض در مسیر 
```
/var/lib/minidlna
```
در اختیار شما قرار می‌گیرد. کافی است هر موسیقی، فیلم و عکسی را که می‌خواهید به اشتراک بگذارید به این پوشه منتقل کنید.

کار تمام است. شما موفق شدید!

## مرحله بعد چیست؟

حالا وقت آن رسیده که با تلفن همراه هوشمند و یا تلویزیونتان به سرور 
dlnaی 
که ساخته‌اید وصل شوید و محتوای خود را تماشا کنید! این شیوه روی هر دستگاه و سیستم عاملی کمی متفاوت است:

### اندروید

VLC
دوای هر دردی است. خیلی ساده 
وی ال سی را نصب کنید. وارد قسمت
Browse
بشوید.
حالا
miniDLNA 
خودش را در قسمت 
Local Network
به شما نشان می‌دهد:
![ تصویری از یک جاده ](Screenshot_20240314_112813_VLC~2.webp?classes=center&loading=lazy)

کافی است تصویر مارپیچ بنفش را انتخاب کنید تا وارد دنیای فیلم و موسیقی شوید.

### تلویزیون

تلویزیون شما را نمی‌دانم. اما تلویزیون من که بیش از ده سال از تولید آن می‌گذرد از
dlna
پشتیبانی می‌کند. خیلی راحت وقتی در بخش مولتی‌مدیا وارد می‌شوم با همان لوگوی مارپیچ بنفش روبرو می‌شوم!

## اگر کاربر لینوکس نیستید ...

MiniDLNA
برای لینوکس ارائه شده‌ است. شاید بتوانید آن را روی ویندوز هم نصب کنید اما من اطلاعی از آن ندارم. در هر صورت اگر موفق نشدید، برای راه اندازی یک سرور 
DLNA
روی ویندوز می‌توانید از 
Kodi 
استفاده کنید که البته امکانات متنوع‌تری هم در اختیارتان می‌گذارد!

قبل‌تر یک‌بار موفق شدم 
MiniDLNA
را روی مک اجرا کنم. حالا یادم نمی‌آید. به هر حال اگر موفق نشدید آن را روی مک اجرا کنید باز هم 
Kodi
منتظر شماست.

## چند یادداشت برای خودم

پس از نصب 
MiniDLNA
تغییر در تنظیمات با تغییر این فایل صورت می‌گیرد:

```
/etc/minidlna.conf
```
به عنوان یک تغییر کاربردی و پرچالش می‌توانم این خط را اضافه کنم:
```
media_dir=/home/MY_USER/Downloads
```

با افزودن این خط همهٔ افرادی که به شبکهٔ من متصل هستند می‌توانند تمام فیلم و عکس و موسیقی‌هایی که دانلود کرده‌ام را تماشا کنند. باید مراقب باشم! 

تغییرات دیگری که می‌توان در این فایل ایجاد کرد در همان‌جا توضیح داده شده‌اند.

به علاوه لازم است بعد از هر تغییر
MiniDLNA
را ری‌استارت کنم:

```
sudo service minidlna restart
```



