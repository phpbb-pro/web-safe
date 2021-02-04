@extends('_layouts.blog')

@section('title', 'Cloudflare for phpBB: How to set up and best practices')
@section('desc', '')

@section('content')
@markdown
{.hero-img}
![Cloudflare works with phpBB.](/images/blog/cloudflare-for-phpbb-how-to-set-up-and-best-practices/cloudflare-plus-phpbb.png)

# Cloudflare for phpBB: How to set up and best practices

Whether you own a small and simple community-oriented board or a heavy-loaded forum with hundreds of posts a day, I bet you can benefit from using Cloudflare.

[Cloudflare](https://www.cloudflare.com/) is a service with many features. DDoS Protection, Content Delivery Network, Site Speed Optimization or Firewall just to mention the most useful of them. It offers a free tier (with many features already available!) as well as very reasonable price model for additional features. Big majority of phpBB boards are good with free plan though. Let's set it up and go through the list of features one by one.

## Set up Cloudflare
First off, you need to register on [cloudflare.com](https://www.cloudflare.com/). Just follow the instructions, they are very clear and simple. Enable everything they ask you about (or leave it be as you can change the settings later). The most difficult part is changing the NS records. Contact your server admin if you are unsure.

In the end, you will land on the Cloudflare's dasboard. You can see multiple icons up in the menu. They may seem overwhelming, especially if you have no idea what the labels mean. No worry, let me guide you through them one by one.

There are four parts I would like to focus on:
1. [settings](#1-in-the-settings)
2. [analytics](#2-analytics)
3. [miscellaneous](#3-miscellaneous)
4. [plan upgrade](#4-should-i-upgrade-to-a-paid-plan)

### 1. In the settings
Cloudflare has a huge amount of settings to fine-tune the experience for your users. Many of them aren't available in free plan, so I will skip those for the times' sake.

![Cloudflare menu.](/images/blog/cloudflare-for-phpbb-how-to-set-up-and-best-practices/cloudflare-menu.png)

#### SSL/TLS
Click on the SSL/TLS icon. Let me quickly explain what SSL/TLS is. It is a security protocol that ensures that data sent from your server to your user won't be visible to anyone else on the way. Reason why you maybe never heard of it is that it is a hidden layer under HTTPS. So to make it simpler - we talk about HTTPS.

Now this is very important to get right. Your board *MUST* use HTTPS. Today a certificate needed to support HTTPS can be obtained [for free](https://letsencrypt.org/). Ask your server admin to set it up for you. If they refuse to do so or ask money for that, I advise you to [change your provider](https://www.phpbb.com/hosting/). With certificate successfully installed, let's get full use of it in Cloudflare:

1. In Overview tab:
    1. Set encryption mode to **Full**. This will ensure security and privacy of your users. ![Full SSL/TLS encryption mode.](/images/blog/cloudflare-for-phpbb-how-to-set-up-and-best-practices/full-ssl-tls-encryption.png)
    2. Optionally, enable SSL/TLS Recommender. Cloudflare will send you an email in case something is off or they introduce new settings.
2. Switch to *Edge Certificates* tab:
    1. Enable *Always Use HTTPS*.
    2. Enable *HTTP Strict Transport Security (HSTS)*. Don't get afraid with the confirmation dialog. Once on HTTPS, you really don't want to switch back to HTTP. In the configuration modal, enable everything except for *Preload* and set *Max Age Heaer (max-age)* to 1 month.
    3. Enable *Opportunistic Encryption*, *TLS 1.3* and *Automatic HTTPS Rewrites*.

#### Firewall
You may think of your local computer's firewall when seing this, and you are right - they are quite the same thing. However, instead of protecting your PC, this firewall protects your board. By default it works very well, so I advise you don't touch the settings unless someone does something really bad. In that case you can create Firewall rules - disallow access to anyone who matches your filters (e.g. Country, IP address, User Agent). This can be very powerful spambot countermeasure! I still encourage you to enable at least one [Anti-Spam extension](https://www.phpbb.com/customise/db/extensions/anti-spam-41) though.

#### Speed
Oh yes, you probably started to investigate more about Cloudflare primarily because of this feature. And rightly so, it can make your board much faster with a click of a button. To see the potential, Cloudflare offers an Overview screen that will calculate how faster your board can be with optimizations enabled. Maybe you will be surprised with the results and won't belive it. But let me assure you, it *will* speed up your board.

![Cloudflare can speed up your website by 50%.](/images/blog/cloudflare-for-phpbb-how-to-set-up-and-best-practices/cloudflare-speed-test.png)

Let's head over to the *Optimizations* tab:
1. Enable *Auto Minify* for all 3 asset types: JavaScript, CSS and HTML.
2. Enable *Brotli*.
3. Give *Rocket Loader™* a chance. It will probably work nicely with (almost) untouched prosilver, but may cause problems on heavy-modified or custom-styled boards. If your board doesn't show any signs of damage, you just improved the performace by a giant leap!

#### Network
Various crazy abbreviations that will make your board faster by enabling advanced transport protocols. Such protocols don't change anything on your site, but rather change a route to it. Think of old dirt road remade to a highway.

1. Enable *HTTP/2*, *HTTP/3 (with QUIC)*, *0-RTT Connection Resumption*, *IPv6 Compatibility*, *WebSockets* and *Onion Routing*.
2. Do not enable *Pseudo IPv4*, phpBB can handle IPv6 just right.
3. I also suggest disabling *IP Geolocation* as phpBB won't use it in any way.

That's it! You just ideally configured Cloudflare for phpBB. Let me remind you, that Cloudflare can also provide powerful analytics.


### 2. Analytics
The Analytics tab is a nice source of information. You can see how many unique visitors your board hosted, what their country is and how much Cloudflare helped them access your board with speed. You can also see how Cloudflare protected you from various threats. Don't hesitate to dig into the data!

![Cloudflare offers a chart of number of requests.](/images/blog/cloudflare-for-phpbb-how-to-set-up-and-best-practices/cloudflare-analytics.png)

#### Browser Insights
In the *Speed* -> *Browser Insights*, go to *Configurations*, enable *Browser Insights* and wait for a day. You will see how your board performs. This information has also impact on SEO, so pay attention.

![Cloudflare tracks Core Web Vitals for you.](/images/blog/cloudflare-for-phpbb-how-to-set-up-and-best-practices/cloudflare-browser-insights.png)


### 3. Miscellaneous
Sometimes you change a setting in the Cloudflare dashboard and don't want to wait until it propagates automatically. You have two options, based on the scenario:
1. If you want to test out the setting, enable *Development mode* (available in *Overview*). This will disable Cloudflare's cache and you can see the changes immediatelly.
2. If you are sure about the change, hit *Purge Cache* (also in *Overview*) - cache will be purged in the same way phpBB's cache is.

![Cloudflare Quick Actions - when you need to step in fast.](/images/blog/cloudflare-for-phpbb-how-to-set-up-and-best-practices/cloudflare-quick-actions.png)

#### Under attack
phpBB can be attacked in many ways. DDoS is a simple taks for Cloudflare, but it doesn't automatically detect phpBB-specific threats such as massive registration or spamming. If you happen to see such attack in action, quickly enable *Under Attack Mode*. This will show a challenge (similar to reCAPTCHA) to every visitor. I know it isn't convenient, but usually it discourages the attackers within few minutes and you can safely disable the attack mode. Or it at least gives you precious minutes to discover attacker's IP address and block it in the *Firewall*.


### 4. Should I upgrade to a paid plan?
This may look like a difficult question to answer, but in fact it isn't. I know many appreciate phpBB because it is free. phpBB has helped build [thousands of communities](https://www.phpbb.com/showcase/) thanks to this. On the other hand, phpBB is also used by many companies because of its [A-grade security](https://www.phpbb.com/about/features/#audit), willing to spend extra money on security, privacy and performance. So if your board is non-commercial, you are probably fine with free tier. If you can afford to spend 20 (or more) bucks a month without harming your business, I encourage you to upgrade especially because of these features:
1. *Image Resizing*, *Polish* and *Mirage* - if your board is image-heavy, this will greatly improve its performance.
2. *Enhanced HTTP/2 Prioritization* and *TCP Turbo*


## Best practices
Now that Cloudflare protects and speeds up your board, it's time to mention some tips and issues on the phpBB side of things.

### Real IP address
Cloudflare works like an extra layer between your servers and your users. This makes your server think everyone comes from the same IP address (while actually it is always Cloudflare). This can cause problems with banning/tracking your users in phpBB's moderation panel. Thankfuly, this is a quick fix. Just install [CloudFlare IP extension](https://sitesplat.com/phpBB3/viewtopic.php?f=17&t=3200&p=19387#p19387) and it will automatically transform IP addresses back to the original ones. If you have bought FLATBOOTS or BBOOTS styles, you are eligible for an improved version which allows you to set the development mode and purge cache directly from your ACP - very convenient!

### Outdated CSS
If, for some reason after you updated your phpBB or installed a new extension, your site looks wrong, it is probably an outdated CSS problem. phpBB already does assets versioning, but some (usually unapproved) extensions can load CSS in old manner. Cloudflare doesn't know it has changed, so you need to tell it manually - purge the Cloudflare cache and you are done.

In case you are changing the CSS yourself and need more attempts to get it right (although I strongly discourage you to develop directly on a live board), turn on a *Development mode*, do your work and then turn it off and purge the cache.

### Malfunctioning ACP
Sometimes Cloudflare does too much optimizations on pages where it isn't necessary. Great example can be Administration Control Panel. If some ACP page doesn't function correctly, exclude it from Cloudflare:
1. Go to *Page Rules*
2. *Create Page Rule*
3. Set URL to *yourforum.com/adm/**
4. Settings are:
    * *Disable Performance*
    * *Cache Level* set to *Bypass*


## phpBB + Cloudflare = ❤️
As you can see, even though phpBB is already super-optimized, Cloudflare can give it another kick both in security and performance frontlines. Your users (and Google Bot) will appreciate the speed improvements, while automatic DDoS protection, HTTPS enforcement, Firewall and Analytics will give you even more confidence in administering your board. Give it try now and I bet you won't go back.

---

By the way, if you are serious about improving the experience of your users, I offer two great extensions that do just that:
* [phpBB Browser & Mobile Notifications Extension](https://senky.github.io/pushnotifications/) sends notifications from your board to the user's PC or smartphone even when not viewing your board.

* [phpBB Forms Extension]({{ route('forms/') }}) allows you to collect and organize data yourself or lead your members while they create review, report, request, application or any kind of structured content.
@endmarkdown
@endsection
