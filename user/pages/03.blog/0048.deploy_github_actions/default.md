---
title: از گیت‌هاب به سرور شخصی (۲) GitHub Actions
metadata: 
    description: از گیت‌هاب به سرور شخصی با GitHub Actions گیت هاب FTP Deploy اف تی پی
progress_bar: 1
pdate: یکشنبه ۵ فروردین ۱۴۰۳
taxonomy:
    tag: [ github , git]
published: 1
structure: BlogPosting
datePublished: 2024-03-24T13:00:46+03:30
---
![ FTP Deploy ](ftp_deploy.webp?classes=center&loading=lazy)
<div class="align-center">
</div>

پیش‌تر 
[نوشته‌ای دربارهٔ 
launchdeck.io](/blog/launchdeck_io)
نوشته بودم. توصیه می‌کنم قبل از ادامه دادن آن را بخوانید.

داشتم به دنبال جایگزینی برای 
launchdeck
 که نسخه رایگانش حداکثر از یک پروژه پشتیبانی می‌کند می‌گشتم که فهمیدم خود 
GitHub
این کار را انجام می‌دهد! خیلی راحت هم پیدا شد. نمی‌دانم چرا پیش‌تر که 
launchdeck 
را کشف کرده بودم، این قضیه بر من پوشیده مانده بود؟


[FTP Deploy](https://github.com/marketplace/actions/ftp-deploy)
که در فهرست 
GitHub Actions
ها قرار می‌گیرد پس از تعریف یک Action در 
GitHub
بدون نیاز به هیچ کار اضافه‌ای بعد از هر 
push
، سروری که مشخص کرده‌اید را به کمک 
FTP
بروزرسانی می‌کند. 

توضیحات بیشتر و نحوه استفاده در 
[صفحهٔ مربوطه](https://github.com/marketplace/actions/ftp-deploy)
 آمده است. 

اگر از 
SSH
استفاده می‌کنید 
[web deploy anything](https://github.com/marketplace/actions/web-deploy-anything)
را ببینید.

امتحانش هم کردم و حالا فایل‌های روی سرور بعد از هر 
push
مخزن
[koodakancharity.io](https://github.com/shaban532/koodakancharity.io)
بروزرسانی می‌شود و در آدرس
[kc.sibiya.ir](https://kc.sibiya.ir)
قابل مشاهده خواهد بود.

خوب است اضافه کنم که برای همین مخزن کوچک و البته یک تغییر خیلی کوچک، سرعت پایین
FTP Deploy
به عنوان یک
GitHub Actions
 نسبت به 
launchdeck
کاملاً برایم مشهود بود. هر چند برای من خیلی مهم نیست اما شاید همین تفاوت سرعت بهانه‌ای باشد که کسی برای استفاده از 
launchdeck
ماهانه ۹ دلار هزینه کند. البته اگر مثل من به دلیل آشنا نبودن با 
GitHub Actions
مجبور به هزینه نشود!