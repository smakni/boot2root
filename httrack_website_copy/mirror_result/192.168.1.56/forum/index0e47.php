<?xml version="1.0" encoding="utf-8"?><rss version="2.0" xmlns:content="http://purl.org/rss/1.0/modules/content/" xmlns:dc="http://purl.org/dc/elements/1.1/">
<channel>
<title>HackMe</title>
<link>http://192.168.1.8/forum/</link>
<description>HackMe</description>
<language>en</language>
<item>
<title>Probleme login ?</title>
<content:encoded><![CDATA[<p>Oct  5 08:44:40 BornToSecHackMe sshd[7482]: input_userauth_request: invalid user test [preauth]<br />
Oct  5 08:44:40 BornToSecHackMe sshd[7482]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 08:44:40 BornToSecHackMe sshd[7482]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=161.202.39.38-static.reverse.softlayer.com<br />
Oct  5 08:44:42 BornToSecHackMe sshd[7482]: Failed password for invalid user test from 161.202.39.38 port 53781 ssh2<br />
Oct  5 08:44:42 BornToSecHackMe sshd[7482]: Received disconnect from 161.202.39.38: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 08:44:44 BornToSecHackMe sshd[7484]: Invalid user user from 161.202.39.38<br />
Oct  5 08:44:44 BornToSecHackMe sshd[7484]: input_userauth_request: invalid user user [preauth]<br />
Oct  5 08:44:44 BornToSecHackMe sshd[7484]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 08:44:44 BornToSecHackMe sshd[7484]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=161.202.39.38-static.reverse.softlayer.com<br />
Oct  5 08:44:46 BornToSecHackMe sshd[7484]: Failed password for invalid user user from 161.202.39.38 port 54109 ssh2<br />
Oct  5 08:44:46 BornToSecHackMe sshd[7484]: Received disconnect from 161.202.39.38: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 08:44:48 BornToSecHackMe sshd[7486]: Invalid user admin from 161.202.39.38<br />
Oct  5 08:44:48 BornToSecHackMe sshd[7486]: input_userauth_request: invalid user admin [preauth]<br />
Oct  5 08:44:48 BornToSecHackMe sshd[7486]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 08:44:48 BornToSecHackMe sshd[7486]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=161.202.39.38-static.reverse.softlayer.com<br />
Oct  5 08:44:50 BornToSecHackMe sshd[7486]: Failed password for invalid user admin from 161.202.39.38 port 54501 ssh2<br />
Oct  5 08:44:51 BornToSecHackMe sshd[7486]: Received disconnect from 161.202.39.38: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 08:44:52 BornToSecHackMe sshd[7488]: Invalid user PlcmSpIp from 161.202.39.38<br />
Oct  5 08:44:52 BornToSecHackMe sshd[7488]: input_userauth_request: invalid user PlcmSpIp [preauth]<br />
Oct  5 08:44:52 BornToSecHackMe sshd[7488]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 08:44:52 BornToSecHackMe sshd[7488]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=161.202.39.38-static.reverse.softlayer.com<br />
Oct  5 08:44:55 BornToSecHackMe sshd[7488]: Failed password for invalid user PlcmSpIp from 161.202.39.38 port 54827 ssh2<br />
Oct  5 08:44:55 BornToSecHackMe sshd[7488]: Received disconnect from 161.202.39.38: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 08:44:57 BornToSecHackMe sshd[7490]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=161.202.39.38-static.reverse.softlayer.com  user=root<br />
Oct  5 08:44:59 BornToSecHackMe sshd[7490]: Failed password for root from 161.202.39.38 port 55193 ssh2<br />
Oct  5 08:44:59 BornToSecHackMe sshd[7490]: Received disconnect from 161.202.39.38: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 08:45:01 BornToSecHackMe CRON[7494]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 08:45:01 BornToSecHackMe CRON[7494]: pam_unix(cron:session): session closed for user root<br />
Oct  5 08:45:01 BornToSecHackMe sshd[7492]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=161.202.39.38-static.reverse.softlayer.com  user=root<br />
Oct  5 08:45:03 BornToSecHackMe sshd[7492]: Failed password for root from 161.202.39.38 port 55547 ssh2<br />
Oct  5 08:45:03 BornToSecHackMe sshd[7492]: Received disconnect from 161.202.39.38: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 08:45:05 BornToSecHackMe sshd[7537]: Invalid user ftpuser from 161.202.39.38<br />
Oct  5 08:45:09 BornToSecHackMe sshd[7539]: input_userauth_request: invalid user pi [preauth]<br />
Oct  5 08:45:09 BornToSecHackMe sshd[7539]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 08:45:09 BornToSecHackMe sshd[7539]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=161.202.39.38-static.reverse.softlayer.com<br />
Oct  5 08:45:12 BornToSecHackMe sshd[7539]: Failed password for invalid user pi from 161.202.39.38 port 56275 ssh2<br />
Oct  5 08:45:12 BornToSecHackMe sshd[7539]: Received disconnect from 161.202.39.38: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 08:45:13 BornToSecHackMe sshd[7541]: Invalid user test from 161.202.39.38<br />
Oct  5 08:45:13 BornToSecHackMe sshd[7541]: input_userauth_request: invalid user test [preauth]<br />
Oct  5 08:45:14 BornToSecHackMe sshd[7541]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 08:45:14 BornToSecHackMe sshd[7541]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=161.202.39.38-static.reverse.softlayer.com<br />
Oct  5 08:45:16 BornToSecHackMe sshd[7541]: Failed password for invalid user test from 161.202.39.38 port 56630 ssh2<br />
Oct  5 08:45:16 BornToSecHackMe sshd[7541]: Received disconnect from 161.202.39.38: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 08:45:18 BornToSecHackMe sshd[7543]: Invalid user admin from 161.202.39.38<br />
Oct  5 08:45:18 BornToSecHackMe sshd[7543]: input_userauth_request: invalid user admin [preauth]<br />
Oct  5 08:45:18 BornToSecHackMe sshd[7543]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 08:45:18 BornToSecHackMe sshd[7543]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=161.202.39.38-static.reverse.softlayer.com<br />
Oct  5 08:45:20 BornToSecHackMe sshd[7543]: Failed password for invalid user admin from 161.202.39.38 port 57011 ssh2<br />
Oct  5 08:45:20 BornToSecHackMe sshd[7543]: Received disconnect from 11.202.39.38: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 08:45:22 BornToSecHackMe sshd[7545]: Invalid user nagios from 11.202.39.38<br />
Oct  5 08:45:22 BornToSecHackMe sshd[7545]: input_userauth_request: invalid user nvdb [preauth]<br />
Oct  5 08:45:22 BornToSecHackMe sshd[7545]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 08:45:22 BornToSecHackMe sshd[7545]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=11.202.39.38-static.reverse.softlayer.com<br />
Oct  5 08:45:25 BornToSecHackMe sshd[7545]: Failed password for invalid user nvdb from 161.202.39.38 port 57329 ssh2<br />
Oct  5 08:45:25 BornToSecHackMe sshd[7545]: Received disconnect from 11.202.39.38: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 08:45:26 BornToSecHackMe sshd[7547]: Invalid user adam from 11.202.39.38<br />
Oct  5 08:45:26 BornToSecHackMe sshd[7547]: input_userauth_request: invalid user adam [preauth]<br />
Oct  5 08:45:27 BornToSecHackMe sshd[7547]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 08:45:27 BornToSecHackMe sshd[7547]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=161.202.39.38-static.reverse.softlayer.com<br />
Oct  5 08:45:29 BornToSecHackMe sshd[7547]: Failed password for invalid user !q\]Ej?*5K5cy*AJ from 161.202.39.38 port 57764 ssh2<br />
Oct  5 08:45:29 BornToSecHackMe sshd[7547]: Received disconnect from 161.202.39.38: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 08:46:01 BornToSecHackMe CRON[7549]: pam_unix(cron:session): session opened for user lmezard by (uid=1040)<br />
Oct  5 09:21:01 BornToSecHackMe CRON[9111]: pam_unix(cron:session): session closed for user lmezard <br />
Oct  5 10:51:01 BornToSecHackMe CRON[13049]: pam_unix(cron:session): session closed for user root<br />
Oct  5 10:52:01 BornToSecHackMe CRON[13092]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 10:52:02 BornToSecHackMe CRON[13092]: pam_unix(cron:session): session closed for user root<br />
Oct  5 10:53:01 BornToSecHackMe CRON[13135]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:09:01 BornToSecHackMe CRON[13825]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:09:01 BornToSecHackMe CRON[13824]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:10:01 BornToSecHackMe CRON[13875]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:10:01 BornToSecHackMe CRON[13875]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:11:01 BornToSecHackMe CRON[13918]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:11:01 BornToSecHackMe CRON[13918]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:12:01 BornToSecHackMe CRON[13961]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:12:01 BornToSecHackMe CRON[13961]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:13:01 BornToSecHackMe CRON[14004]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:13:01 BornToSecHackMe CRON[14004]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:14:01 BornToSecHackMe CRON[14047]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:14:01 BornToSecHackMe CRON[14047]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:15:01 BornToSecHackMe CRON[14090]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:15:01 BornToSecHackMe CRON[14090]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:16:01 BornToSecHackMe CRON[14133]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:16:01 BornToSecHackMe CRON[14133]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:17:01 BornToSecHackMe CRON[14176]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:23:01 BornToSecHackMe CRON[14477]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:24:01 BornToSecHackMe CRON[14520]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:24:01 BornToSecHackMe CRON[14520]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:25:01 BornToSecHackMe CRON[14563]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:25:01 BornToSecHackMe CRON[14563]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:25:05 BornToSecHackMe CRON[15724]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:25:06 BornToSecHackMe CRON[15724]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:25:07 BornToSecHackMe CRON[15724]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:25:08 BornToSecHackMe CRON[15724]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:25:22 BornToSecHackMe sshd[14606]: Did not receive identification string from 23.99.195.219<br />
Oct  5 11:26:01 BornToSecHackMe CRON[14607]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:26:01 BornToSecHackMe CRON[14607]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:27:01 BornToSecHackMe CRON[14650]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:27:01 BornToSecHackMe CRON[14650]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:28:01 BornToSecHackMe CRON[14693]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:28:01 BornToSecHackMe CRON[14693]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:29:01 BornToSecHackMe CRON[14736]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:29:01 BornToSecHackMe CRON[14736]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:29:16 BornToSecHackMe sshd[14779]: Invalid user admin from 104.245.98.119<br />
Oct  5 11:29:16 BornToSecHackMe sshd[14779]: input_userauth_request: invalid user admin [preauth]<br />
Oct  5 11:29:16 BornToSecHackMe sshd[14779]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:29:16 BornToSecHackMe sshd[14779]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:29:18 BornToSecHackMe sshd[14779]: Failed password for invalid user admin from 104.245.98.119 port 22717 ssh2<br />
Oct  5 11:29:18 BornToSecHackMe sshd[14779]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:29:41 BornToSecHackMe sshd[14781]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119  user=root<br />
Oct  5 11:29:44 BornToSecHackMe sshd[14781]: Failed password for root from 104.245.98.119 port 23400 ssh2<br />
Oct  5 11:29:44 BornToSecHackMe sshd[14781]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:29:47 BornToSecHackMe sshd[14783]: Invalid user guest from 104.245.98.119<br />
Oct  5 11:29:47 BornToSecHackMe sshd[14783]: input_userauth_request: invalid user guest [preauth]<br />
Oct  5 11:29:48 BornToSecHackMe sshd[14783]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:29:48 BornToSecHackMe sshd[14783]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:29:50 BornToSecHackMe sshd[14783]: Failed password for invalid user guest from 104.245.98.119 port 24338 ssh2<br />
Oct  5 11:29:50 BornToSecHackMe sshd[14783]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:30:01 BornToSecHackMe CRON[14787]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:30:01 BornToSecHackMe CRON[14787]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:30:15 BornToSecHackMe sshd[14785]: Invalid user ubnt from 104.245.98.119<br />
Oct  5 11:30:15 BornToSecHackMe sshd[14785]: input_userauth_request: invalid user ubnt [preauth]<br />
Oct  5 11:30:15 BornToSecHackMe sshd[14785]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:30:15 BornToSecHackMe sshd[14785]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:30:17 BornToSecHackMe sshd[14785]: Failed password for invalid user ubnt from 104.245.98.119 port 24710 ssh2<br />
Oct  5 11:30:17 BornToSecHackMe sshd[14785]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:30:32 BornToSecHackMe sshd[14830]: Invalid user support from 104.245.98.119<br />
Oct  5 11:30:32 BornToSecHackMe sshd[14830]: input_userauth_request: invalid user support [preauth]<br />
Oct  5 11:30:32 BornToSecHackMe sshd[14830]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:30:32 BornToSecHackMe sshd[14830]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:30:35 BornToSecHackMe sshd[14830]: Failed password for invalid user support from 104.245.98.119 port 25965 ssh2<br />
Oct  5 11:30:35 BornToSecHackMe sshd[14830]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:30:46 BornToSecHackMe sshd[14832]: Invalid user test from 104.245.98.119<br />
Oct  5 11:30:46 BornToSecHackMe sshd[14832]: input_userauth_request: invalid user test [preauth]<br />
Oct  5 11:30:46 BornToSecHackMe sshd[14832]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:30:46 BornToSecHackMe sshd[14832]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:30:48 BornToSecHackMe sshd[14832]: Failed password for invalid user test from 104.245.98.119 port 27190 ssh2<br />
Oct  5 11:30:48 BornToSecHackMe sshd[14832]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:30:51 BornToSecHackMe sshd[14834]: Invalid user user from 104.245.98.119<br />
Oct  5 11:30:51 BornToSecHackMe sshd[14834]: input_userauth_request: invalid user user [preauth]<br />
Oct  5 11:30:51 BornToSecHackMe sshd[14834]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:30:51 BornToSecHackMe sshd[14834]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:30:53 BornToSecHackMe sshd[14834]: Failed password for invalid user user from 104.245.98.119 port 27769 ssh2<br />
Oct  5 11:30:54 BornToSecHackMe sshd[14834]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:31:01 BornToSecHackMe sshd[14836]: Invalid user admin from 104.245.98.119<br />
Oct  5 11:31:01 BornToSecHackMe sshd[14836]: input_userauth_request: invalid user admin [preauth]<br />
Oct  5 11:31:01 BornToSecHackMe CRON[14838]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:31:01 BornToSecHackMe sshd[14836]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:31:01 BornToSecHackMe sshd[14836]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:31:01 BornToSecHackMe CRON[14838]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:31:02 BornToSecHackMe sshd[14836]: Failed password for invalid user admin from 104.245.98.119 port 28290 ssh2<br />
Oct  5 11:31:03 BornToSecHackMe sshd[14836]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:31:20 BornToSecHackMe sshd[14881]: Invalid user PlcmSpIp from 104.245.98.119<br />
Oct  5 11:31:20 BornToSecHackMe sshd[14881]: input_userauth_request: invalid user PlcmSpIp [preauth]<br />
Oct  5 11:31:21 BornToSecHackMe sshd[14881]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:31:21 BornToSecHackMe sshd[14881]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:31:22 BornToSecHackMe sshd[14881]: Failed password for invalid user PlcmSpIp from 104.245.98.119 port 29308 ssh2<br />
Oct  5 11:31:23 BornToSecHackMe sshd[14881]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:31:26 BornToSecHackMe sshd[14883]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119  user=root<br />
Oct  5 11:31:29 BornToSecHackMe sshd[14883]: Failed password for root from 104.245.98.119 port 29799 ssh2<br />
Oct  5 11:31:29 BornToSecHackMe sshd[14883]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:31:30 BornToSecHackMe sshd[14885]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119  user=root<br />
Oct  5 11:31:33 BornToSecHackMe sshd[14885]: Failed password for root from 104.245.98.119 port 29922 ssh2<br />
Oct  5 11:31:33 BornToSecHackMe sshd[14885]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:31:39 BornToSecHackMe sshd[14887]: Invalid user ftpuser from 104.245.98.119<br />
Oct  5 11:31:39 BornToSecHackMe sshd[14887]: input_userauth_request: invalid user ftpuser [preauth]<br />
Oct  5 11:31:40 BornToSecHackMe sshd[14887]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:31:40 BornToSecHackMe sshd[14887]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:31:42 BornToSecHackMe sshd[14887]: Failed password for invalid user ftpuser from 104.245.98.119 port 30401 ssh2<br />
Oct  5 11:31:42 BornToSecHackMe sshd[14887]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:31:44 BornToSecHackMe sshd[14889]: Invalid user pi from 104.245.98.119<br />
Oct  5 11:31:44 BornToSecHackMe sshd[14889]: input_userauth_request: invalid user pi [preauth]<br />
Oct  5 11:31:44 BornToSecHackMe sshd[14889]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:31:44 BornToSecHackMe sshd[14889]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:31:46 BornToSecHackMe sshd[14889]: Failed password for invalid user pi from 104.245.98.119 port 30558 ssh2<br />
Oct  5 11:31:46 BornToSecHackMe sshd[14889]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:32:01 BornToSecHackMe CRON[14893]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:32:01 BornToSecHackMe CRON[14893]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:32:08 BornToSecHackMe sshd[14891]: Invalid user test from 104.245.98.119<br />
Oct  5 11:32:08 BornToSecHackMe sshd[14891]: input_userauth_request: invalid user test [preauth]<br />
Oct  5 11:32:08 BornToSecHackMe sshd[14891]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:32:08 BornToSecHackMe sshd[14891]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:32:10 BornToSecHackMe sshd[14891]: Failed password for invalid user test from 104.245.98.119 port 31167 ssh2<br />
Oct  5 11:32:10 BornToSecHackMe sshd[14891]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:32:19 BornToSecHackMe sshd[14936]: Invalid user admin from 104.245.98.119<br />
Oct  5 11:32:19 BornToSecHackMe sshd[14936]: input_userauth_request: invalid user admin [preauth]<br />
Oct  5 11:32:19 BornToSecHackMe sshd[14936]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:32:19 BornToSecHackMe sshd[14936]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:32:21 BornToSecHackMe sshd[14936]: Failed password for invalid user admin from 104.245.98.119 port 32271 ssh2<br />
Oct  5 11:32:21 BornToSecHackMe sshd[14936]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:32:28 BornToSecHackMe sshd[14938]: Invalid user nagios from 104.245.98.119<br />
Oct  5 11:32:28 BornToSecHackMe sshd[14938]: input_userauth_request: invalid user naos [preauth]<br />
Oct  5 11:32:29 BornToSecHackMe sshd[14938]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:32:29 BornToSecHackMe sshd[14938]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:32:31 BornToSecHackMe sshd[14938]: Failed password for invalid user naos from 104.245.98.119 port 32805 ssh2<br />
Oct  5 11:32:31 BornToSecHackMe sshd[14938]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:32:40 BornToSecHackMe sshd[14940]: Invalid user adam from 104.245.98.119<br />
Oct  5 11:32:40 BornToSecHackMe sshd[14940]: input_userauth_request: invalid user adm [preauth]<br />
Oct  5 11:32:40 BornToSecHackMe sshd[14940]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 11:32:40 BornToSecHackMe sshd[14940]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=104.245.98.119<br />
Oct  5 11:32:42 BornToSecHackMe sshd[14940]: Failed password for invalid user adm from 104.245.98.119 port 33503 ssh2<br />
Oct  5 11:32:43 BornToSecHackMe sshd[14940]: Received disconnect from 104.245.98.119: 3: com.jcraft.jsch.JSchException: Auth fail [preauth]<br />
Oct  5 11:33:01 BornToSecHackMe CRON[14942]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:33:01 BornToSecHackMe CRON[14942]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:34:01 BornToSecHackMe CRON[14985]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:34:01 BornToSecHackMe CRON[14985]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:35:01 BornToSecHackMe CRON[15028]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:35:01 BornToSecHackMe CRON[15028]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:36:01 BornToSecHackMe CRON[15071]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:36:01 BornToSecHackMe CRON[15071]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:37:01 BornToSecHackMe CRON[15114]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:37:01 BornToSecHackMe CRON[15114]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:38:01 BornToSecHackMe CRON[15157]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:38:02 BornToSecHackMe CRON[15157]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:39:01 BornToSecHackMe CRON[15200]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:39:01 BornToSecHackMe CRON[15201]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:39:01 BornToSecHackMe CRON[15201]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:39:01 BornToSecHackMe CRON[15200]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:40:01 BornToSecHackMe CRON[15251]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:40:01 BornToSecHackMe CRON[15251]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:41:01 BornToSecHackMe CRON[15294]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:41:01 BornToSecHackMe CRON[15294]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:42:01 BornToSecHackMe CRON[15337]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:42:01 BornToSecHackMe CRON[15337]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:43:01 BornToSecHackMe CRON[15380]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:43:01 BornToSecHackMe CRON[15380]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:44:01 BornToSecHackMe CRON[15423]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:44:01 BornToSecHackMe CRON[15423]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:45:01 BornToSecHackMe CRON[15466]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:45:01 BornToSecHackMe CRON[15466]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:46:01 BornToSecHackMe CRON[15509]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:46:01 BornToSecHackMe CRON[15509]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:47:01 BornToSecHackMe CRON[15552]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:47:01 BornToSecHackMe CRON[15552]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:48:01 BornToSecHackMe CRON[15595]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:48:01 BornToSecHackMe CRON[15595]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:49:01 BornToSecHackMe CRON[15638]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:49:01 BornToSecHackMe CRON[15638]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:50:01 BornToSecHackMe CRON[15681]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:50:01 BornToSecHackMe CRON[15681]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:51:01 BornToSecHackMe CRON[15724]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:51:01 BornToSecHackMe CRON[15724]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:52:01 BornToSecHackMe CRON[15767]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:52:01 BornToSecHackMe CRON[15767]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:53:01 BornToSecHackMe CRON[15810]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 11:53:02 BornToSecHackMe CRON[15810]: pam_unix(cron:session): session closed for user root<br />
Oct  5 11:54:01 BornToSecHackMe CRON[15853]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:28:01 BornToSecHackMe CRON[20026]: pam_unix(cron:session): session closed for user root<br />
Oct  5 13:29:01 BornToSecHackMe CRON[20069]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:29:01 BornToSecHackMe CRON[20069]: pam_unix(cron:session): session closed for user root<br />
Oct  5 13:30:01 BornToSecHackMe CRON[20113]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:30:01 BornToSecHackMe CRON[20113]: pam_unix(cron:session): session closed for user root<br />
Oct  5 13:31:01 BornToSecHackMe CRON[20156]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:31:01 BornToSecHackMe CRON[20156]: pam_unix(cron:session): session closed for user root<br />
Oct  5 13:31:19 BornToSecHackMe sshd[20199]: reverse mapping checking getaddrinfo for ppp-253-14.20-151.wind.it [151.20.14.253] failed - POSSIBLE BREAK-IN ATTEMPT!<br />
Oct  5 13:31:19 BornToSecHackMe sshd[20199]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=151.20.14.253  user=root<br />
Oct  5 13:31:20 BornToSecHackMe sshd[20199]: Failed password for root from 151.20.14.253 port 54939 ssh2<br />
Oct  5 13:31:21 BornToSecHackMe sshd[20199]: Connection closed by 151.20.14.253 [preauth]<br />
Oct  5 13:32:01 BornToSecHackMe CRON[20201]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:32:01 BornToSecHackMe CRON[20201]: pam_unix(cron:session): session closed for user root<br />
Oct  5 13:33:01 BornToSecHackMe CRON[20244]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:33:01 BornToSecHackMe CRON[20244]: pam_unix(cron:session): session closed for user root<br />
Oct  5 13:34:01 BornToSecHackMe CRON[20287]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:34:01 BornToSecHackMe CRON[20287]: pam_unix(cron:session): session closed for user root<br />
Oct  5 13:35:01 BornToSecHackMe CRON[20330]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:35:01 BornToSecHackMe CRON[20330]: pam_unix(cron:session): session closed for user root<br />
Oct  5 13:36:01 BornToSecHackMe CRON[20373]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:36:01 BornToSecHackMe CRON[20373]: pam_unix(cron:session): session closed for user root<br />
Oct  5 13:37:01 BornToSecHackMe CRON[20416]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:37:01 BornToSecHackMe CRON[20416]: pam_unix(cron:session): session closed for user root<br />
Oct  5 13:38:01 BornToSecHackMe CRON[20459]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:38:01 BornToSecHackMe CRON[20459]: pam_unix(cron:session): session closed for user root<br />
Oct  5 13:39:01 BornToSecHackMe CRON[20502]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 13:39:01 BornToSecHackMe CRON[20503]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:17:04 BornToSecHackMe CRON[22152]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:18:01 BornToSecHackMe CRON[22238]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:18:01 BornToSecHackMe CRON[22238]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:19:01 BornToSecHackMe CRON[22281]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:19:01 BornToSecHackMe CRON[22281]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:20:01 BornToSecHackMe CRON[22324]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:20:01 BornToSecHackMe CRON[22324]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:20:26 BornToSecHackMe sshd[22367]: Invalid user admin from 46.159.82.56<br />
Oct  5 14:20:26 BornToSecHackMe sshd[22367]: input_userauth_request: invalid user admin [preauth]<br />
Oct  5 14:20:26 BornToSecHackMe sshd[22367]: pam_unix(sshd:auth): check pass; user unknown<br />
Oct  5 14:20:26 BornToSecHackMe sshd[22367]: pam_unix(sshd:auth): authentication failure; logname= uid=0 euid=0 tty=ssh ruser= rhost=46.159.82.56<br />
Oct  5 14:20:27 BornToSecHackMe sshd[22367]: Failed password for invalid user admin from 46.159.82.56 port 38179 ssh2<br />
Oct  5 14:20:28 BornToSecHackMe sshd[22367]: Connection closed by 46.159.82.56 [preauth]<br />
Oct  5 14:21:01 BornToSecHackMe CRON[22369]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:21:01 BornToSecHackMe CRON[22369]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:22:01 BornToSecHackMe CRON[22412]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:22:01 BornToSecHackMe CRON[22412]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:23:01 BornToSecHackMe CRON[22455]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:40:02 BornToSecHackMe CRON[23196]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:40:37 BornToSecHackMe sshd[23239]: Received disconnect from 222.122.118.49: 11: Bye Bye [preauth]<br />
Oct  5 14:41:02 BornToSecHackMe CRON[23241]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:41:02 BornToSecHackMe CRON[23241]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:42:01 BornToSecHackMe CRON[23284]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:42:01 BornToSecHackMe CRON[23284]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:43:01 BornToSecHackMe CRON[23327]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:43:01 BornToSecHackMe CRON[23327]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:44:01 BornToSecHackMe CRON[23370]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:44:01 BornToSecHackMe CRON[23370]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:45:01 BornToSecHackMe CRON[23413]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:45:01 BornToSecHackMe CRON[23413]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:46:01 BornToSecHackMe CRON[23456]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:46:01 BornToSecHackMe CRON[23456]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:46:43 BornToSecHackMe sshd[23499]: Received disconnect from 113.199.73.28: 11: Bye Bye [preauth]<br />
Oct  5 14:47:01 BornToSecHackMe CRON[23501]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:47:01 BornToSecHackMe CRON[23501]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:48:01 BornToSecHackMe CRON[23544]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:48:01 BornToSecHackMe CRON[23544]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:49:01 BornToSecHackMe CRON[23587]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:49:01 BornToSecHackMe CRON[23587]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:50:01 BornToSecHackMe CRON[23630]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:50:01 BornToSecHackMe CRON[23630]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:51:01 BornToSecHackMe CRON[23673]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:51:01 BornToSecHackMe CRON[23673]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:52:01 BornToSecHackMe CRON[23716]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:52:01 BornToSecHackMe CRON[23716]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:53:01 BornToSecHackMe CRON[23759]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:53:01 BornToSecHackMe CRON[23759]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:54:00 BornToSecHackMe sshd[23804]: Accepted password for admin from 62.210.32.157 port 61495 ssh2<br />
Oct  5 14:54:00 BornToSecHackMe sshd[23804]: pam_unix(sshd:session): session opened for user admin by (uid=0)<br />
Oct  5 14:54:01 BornToSecHackMe CRON[24053]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:54:01 BornToSecHackMe CRON[24053]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:54:17 BornToSecHackMe sudo: pam_unix(sudo:session): session opened for user root by admin(uid=1000)<br />
Oct  5 14:54:18 BornToSecHackMe sudo: pam_unix(sudo:session): session closed for user root<br />
Oct  5 14:54:29 BornToSecHackMe sudo:      admin : TTY=pts/0 ; PWD=/home/admin ; USER=root ; COMMAND=/bin/sh<br />
Oct  5 14:54:29 BornToSecHackMe sudo: pam_unix(sudo:session): session opened for user root by admin(uid=1000)<br />
Oct  5 14:55:01 BornToSecHackMe CRON[24109]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:55:01 BornToSecHackMe CRON[24109]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:56:01 BornToSecHackMe CRON[24152]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:56:01 BornToSecHackMe CRON[24152]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:56:49 BornToSecHackMe sudo: pam_unix(sudo:session): session opened for user root by admin(uid=0)<br />
Oct  5 14:56:49 BornToSecHackMe sudo: pam_unix(sudo:session): session closed for user root<br />
Oct  5 14:56:55 BornToSecHackMe sudo: pam_unix(sudo:session): session opened for user root by admin(uid=0)<br />
Oct  5 14:56:55 BornToSecHackMe sudo: pam_unix(sudo:session): session closed for user root<br />
Oct  5 14:57:02 BornToSecHackMe CRON[24211]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:57:02 BornToSecHackMe CRON[24211]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:57:56 BornToSecHackMe sudo:     root : TTY=pts/0 ; PWD=/home/admin ; USER=root ; COMMAND=/usr/sbin/service vsftpd restart<br />
Oct  5 14:57:56 BornToSecHackMe sudo: pam_unix(sudo:session): session opened for user root by admin(uid=0)<br />
Oct  5 14:57:56 BornToSecHackMe sudo: pam_unix(sudo:session): session closed for user root<br />
Oct  5 14:58:01 BornToSecHackMe CRON[24274]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:58:01 BornToSecHackMe CRON[24274]: pam_unix(cron:session): session closed for user root<br />
Oct  5 14:59:01 BornToSecHackMe CRON[24317]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 14:59:01 BornToSecHackMe CRON[24317]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:00:01 BornToSecHackMe CRON[24360]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:00:01 BornToSecHackMe CRON[24360]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:01:01 BornToSecHackMe CRON[24403]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:01:01 BornToSecHackMe CRON[24403]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:02:01 BornToSecHackMe CRON[24446]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:02:01 BornToSecHackMe CRON[24446]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:03:01 BornToSecHackMe CRON[24496]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:03:01 BornToSecHackMe CRON[24496]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:03:55 BornToSecHackMe sudo:     root : TTY=pts/0 ; PWD=/home/admin ; USER=root ; COMMAND=/usr/sbin/service vsftpd restart<br />
Oct  5 15:03:55 BornToSecHackMe sudo: pam_unix(sudo:session): session opened for user root by admin(uid=0)<br />
Oct  5 15:03:55 BornToSecHackMe sudo: pam_unix(sudo:session): session closed for user root<br />
Oct  5 15:04:01 BornToSecHackMe CRON[24577]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:04:01 BornToSecHackMe CRON[24577]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:05:01 BornToSecHackMe CRON[24638]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:05:01 BornToSecHackMe CRON[24638]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:06:01 BornToSecHackMe CRON[24681]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:06:01 BornToSecHackMe CRON[24681]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:06:57 BornToSecHackMe sudo: pam_unix(sudo:session): session closed for user root<br />
Oct  5 15:06:58 BornToSecHackMe sshd[24005]: Received disconnect from 62.210.32.157: 11: disconnected by user<br />
Oct  5 15:06:58 BornToSecHackMe sshd[23804]: pam_unix(sshd:session): session closed for user admin<br />
Oct  5 15:07:01 BornToSecHackMe CRON[24724]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:07:01 BornToSecHackMe CRON[24724]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:07:24 BornToSecHackMe sshd[24767]: Accepted password for admin from 62.210.32.157 port 56050 ssh2<br />
Oct  5 15:07:24 BornToSecHackMe sshd[24767]: pam_unix(sshd:session): session opened for user admin by (uid=0)<br />
Oct  5 15:07:38 BornToSecHackMe sshd[24920]: Received disconnect from 62.210.32.157: 11: disconnected by user<br />
Oct  5 15:07:38 BornToSecHackMe sshd[24767]: pam_unix(sshd:session): session closed for user admin<br />
Oct  5 15:08:01 BornToSecHackMe CRON[24977]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:08:01 BornToSecHackMe CRON[24977]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:08:49 BornToSecHackMe sshd[25020]: Accepted password for admin from 62.210.32.157 port 60098 ssh2<br />
Oct  5 15:08:49 BornToSecHackMe sshd[25020]: pam_unix(sshd:session): session opened for user admin by (uid=0)<br />
Oct  5 15:08:50 BornToSecHackMe sshd[25173]: Received disconnect from 62.210.32.157: 11: disconnected by user<br />
Oct  5 15:08:50 BornToSecHackMe sshd[25020]: pam_unix(sshd:session): session closed for user admin<br />
Oct  5 15:09:01 BornToSecHackMe CRON[25175]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:09:01 BornToSecHackMe CRON[25176]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:09:01 BornToSecHackMe CRON[25176]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:09:01 BornToSecHackMe CRON[25175]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:09:04 BornToSecHackMe sshd[25226]: Accepted password for admin from 62.210.32.157 port 50755 ssh2<br />
Oct  5 15:09:04 BornToSecHackMe sshd[25226]: pam_unix(sshd:session): session opened for user admin by (uid=0)<br />
Oct  5 15:09:05 BornToSecHackMe sshd[25379]: Received disconnect from 62.210.32.157: 11: disconnected by user<br />
Oct  5 15:09:05 BornToSecHackMe sshd[25226]: pam_unix(sshd:session): session closed for user admin<br />
Oct  5 15:09:14 BornToSecHackMe sshd[25381]: Accepted password for admin from 62.210.32.157 port 54025 ssh2<br />
Oct  5 15:09:14 BornToSecHackMe sshd[25381]: pam_unix(sshd:session): session opened for user admin by (uid=0)<br />
Oct  5 15:09:14 BornToSecHackMe sshd[25535]: Received disconnect from 62.210.32.157: 11: disconnected by user<br />
Oct  5 15:09:14 BornToSecHackMe sshd[25381]: pam_unix(sshd:session): session closed for user admin<br />
Oct  5 15:09:20 BornToSecHackMe sshd[25537]: Accepted password for admin from 62.210.32.157 port 64745 ssh2<br />
Oct  5 15:09:20 BornToSecHackMe sshd[25537]: pam_unix(sshd:session): session opened for user admin by (uid=0)<br />
Oct  5 15:09:20 BornToSecHackMe sshd[25690]: Received disconnect from 62.210.32.157: 11: disconnected by user<br />
Oct  5 15:09:20 BornToSecHackMe sshd[25537]: pam_unix(sshd:session): session closed for user admin<br />
Oct  5 15:09:32 BornToSecHackMe sshd[25692]: Accepted password for admin from 62.210.32.157 port 54511 ssh2<br />
Oct  5 15:09:32 BornToSecHackMe sshd[25692]: pam_unix(sshd:session): session opened for user admin by (uid=0)<br />
Oct  5 15:09:47 BornToSecHackMe sudo:      admin : TTY=pts/0 ; PWD=/home ; USER=root ; COMMAND=/bin/sh<br />
Oct  5 15:09:47 BornToSecHackMe sudo: pam_unix(sudo:session): session opened for user root by admin(uid=1000)<br />
Oct  5 15:10:00 BornToSecHackMe sudo: pam_unix(sudo:session): session closed for user root<br />
Oct  5 15:10:01 BornToSecHackMe sshd[25845]: Received disconnect from 62.210.32.157: 11: disconnected by user<br />
Oct  5 15:10:01 BornToSecHackMe sshd[25692]: pam_unix(sshd:session): session closed for user admin<br />
Oct  5 15:10:01 BornToSecHackMe CRON[25901]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:10:01 BornToSecHackMe CRON[25901]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:10:05 BornToSecHackMe sshd[25944]: Accepted password for admin from 62.210.32.157 port 51320 ssh2<br />
Oct  5 15:10:05 BornToSecHackMe sshd[25944]: pam_unix(sshd:session): session opened for user admin by (uid=0)<br />
Oct  5 15:10:10 BornToSecHackMe sshd[26097]: Received disconnect from 62.210.32.157: 11: disconnected by user<br />
Oct  5 15:10:10 BornToSecHackMe sshd[25944]: pam_unix(sshd:session): session closed for user admin<br />
Oct  5 15:10:34 BornToSecHackMe sshd[26099]: Accepted password for admin from 62.210.32.157 port 56349 ssh2<br />
Oct  5 15:10:34 BornToSecHackMe sshd[26099]: pam_unix(sshd:session): session opened for user admin by (uid=0)<br />
Oct  5 15:11:01 BornToSecHackMe CRON[26301]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:11:01 BornToSecHackMe CRON[26301]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:11:06 BornToSecHackMe sudo:      admin : TTY=pts/0 ; PWD=/home/admin ; USER=root ; COMMAND=/bin/sh<br />
Oct  5 15:11:06 BornToSecHackMe sudo: pam_unix(sudo:session): session opened for user root by admin(uid=1000)<br />
Oct  5 15:12:01 BornToSecHackMe CRON[26348]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:12:02 BornToSecHackMe CRON[26348]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:13:01 BornToSecHackMe CRON[26392]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:13:01 BornToSecHackMe CRON[26392]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:14:01 BornToSecHackMe CRON[26441]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:14:01 BornToSecHackMe CRON[26441]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:15:01 BornToSecHackMe CRON[26488]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:15:01 BornToSecHackMe CRON[26488]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:16:01 BornToSecHackMe CRON[26534]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:16:01 BornToSecHackMe CRON[26534]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:17:01 BornToSecHackMe CRON[26578]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:17:01 BornToSecHackMe CRON[26577]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:17:01 BornToSecHackMe CRON[26578]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:17:04 BornToSecHackMe CRON[26577]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:18:01 BornToSecHackMe CRON[26663]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:18:01 BornToSecHackMe CRON[26663]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:50:01 BornToSecHackMe CRON[28053]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:51:01 BornToSecHackMe CRON[28096]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:51:01 BornToSecHackMe CRON[28096]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:51:36 BornToSecHackMe sudo: pam_unix(sudo:session): session closed for user root<br />
Oct  5 15:51:37 BornToSecHackMe sshd[26252]: Received disconnect from 62.210.32.157: 11: disconnected by user<br />
Oct  5 15:51:37 BornToSecHackMe sshd[26099]: pam_unix(sshd:session): session closed for user admin<br />
Oct  5 15:51:48 BornToSecHackMe sshd[28139]: Accepted password for admin from 62.210.32.157 port 54915 ssh2<br />
Oct  5 15:51:48 BornToSecHackMe sshd[28139]: pam_unix(sshd:session): session opened for user admin by (uid=0)<br />
Oct  5 15:51:48 BornToSecHackMe sshd[28292]: Received disconnect from 62.210.32.157: 11: disconnected by user<br />
Oct  5 15:51:48 BornToSecHackMe sshd[28139]: pam_unix(sshd:session): session closed for user admin<br />
Oct  5 15:52:01 BornToSecHackMe CRON[28294]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:52:01 BornToSecHackMe CRON[28294]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:52:11 BornToSecHackMe sshd[28337]: Accepted password for admin from 62.210.32.157 port 60970 ssh2<br />
Oct  5 15:52:11 BornToSecHackMe sshd[28337]: pam_unix(sshd:session): session opened for user admin by (uid=0)<br />
Oct  5 15:52:18 BornToSecHackMe sudo:      admin : TTY=pts/0 ; PWD=/home/admin ; USER=root ; COMMAND=/bin/sh<br />
Oct  5 15:52:18 BornToSecHackMe sudo: pam_unix(sudo:session): session opened for user root by admin(uid=1000)<br />
Oct  5 15:53:01 BornToSecHackMe CRON[28544]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:53:01 BornToSecHackMe CRON[28544]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:54:01 BornToSecHackMe CRON[28590]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:54:01 BornToSecHackMe CRON[28590]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:55:01 BornToSecHackMe CRON[28634]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:55:01 BornToSecHackMe CRON[28634]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:56:01 BornToSecHackMe CRON[28677]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:56:01 BornToSecHackMe CRON[28677]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:57:01 BornToSecHackMe CRON[28720]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:57:01 BornToSecHackMe CRON[28720]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:58:01 BornToSecHackMe CRON[28763]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:58:01 BornToSecHackMe CRON[28763]: pam_unix(cron:session): session closed for user root<br />
Oct  5 15:59:01 BornToSecHackMe CRON[28806]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 15:59:02 BornToSecHackMe CRON[28806]: pam_unix(cron:session): session closed for user root<br />
Oct  5 16:00:01 BornToSecHackMe CRON[28849]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 16:00:01 BornToSecHackMe CRON[28849]: pam_unix(cron:session): session closed for user root<br />
Oct  5 16:01:01 BornToSecHackMe CRON[28892]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 16:01:01 BornToSecHackMe CRON[28892]: pam_unix(cron:session): session closed for user root<br />
Oct  5 16:02:01 BornToSecHackMe CRON[28935]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 16:02:01 BornToSecHackMe CRON[28935]: pam_unix(cron:session): session closed for user root<br />
Oct  5 16:03:01 BornToSecHackMe CRON[28979]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 16:03:01 BornToSecHackMe CRON[28979]: pam_unix(cron:session): session closed for user root<br />
Oct  5 16:04:01 BornToSecHackMe CRON[29023]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 16:04:01 BornToSecHackMe CRON[29023]: pam_unix(cron:session): session closed for user root<br />
Oct  5 16:05:01 BornToSecHackMe CRON[29068]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 16:05:01 BornToSecHackMe CRON[29068]: pam_unix(cron:session): session closed for user root<br />
Oct  5 16:06:01 BornToSecHackMe CRON[29172]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 16:06:01 BornToSecHackMe CRON[29172]: pam_unix(cron:session): session closed for user root<br />
Oct  5 16:07:01 BornToSecHackMe CRON[29216]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 16:07:01 BornToSecHackMe CRON[29216]: pam_unix(cron:session): session closed for user root<br />
Oct  5 16:08:01 BornToSecHackMe CRON[29259]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 16:08:01 BornToSecHackMe CRON[29259]: pam_unix(cron:session): session closed for user root<br />
Oct  5 17:22:01 BornToSecHackMe CRON[32732]: pam_unix(cron:session): session closed for user root<br />
Oct  5 17:23:01 BornToSecHackMe CRON[507]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 17:23:01 BornToSecHackMe CRON[507]: pam_unix(cron:session): session closed for user root<br />
Oct  5 17:24:01 BornToSecHackMe CRON[550]: pam_unix(cron:session): session opened for user root by (uid=0)<br />
Oct  5 17:51:01 BornToSecHackMe CRON[1739]: pam_unix(cron:session): session closed for user root<br />
Oct  5 17:51:15 BornToSecHackMe sshd[1782]: Accepted password for admin from 62.210.32.157 port 56754 ssh2<br />
Oct  5 17:51:15 BornToSecHackMe sshd[1782]: pam_unix(sshd:session): session opened for user admin by (uid=0)</p>
]]></content:encoded>
<link>http://192.168.1.8/forum/index.php?id=6</link>
<guid>http://192.168.1.8/forum/index.php?id=6</guid>
<pubDate>Thu, 08 Oct 2015 00:10:21 +0000</pubDate>
<dc:creator>lmezard</dc:creator>
</item>
<item>
<title>Gasolina (reply)</title>
<content:encoded><![CDATA[<p>Je fais du mambo pour que ma meuf allume son moteur<br />
Je fais du mambo pour que ma meuf allume son moteur<br />
Je fais du mambo pour que ma meuf allume son moteur<br />
Qu'elles se préparent à ce qui arrive c'est papi qu'il leur donne, Dur !</p>
<p>Chérie je sais que tu ne vas pas me quitter (dur)<br />
J'aime le fait que tu te laisses conduire (dur ! ! )<br />
Tous les week-ends elle sort vaciller (dur ! ! )<br />
Ma meuf n'arrête pas de sortir car</p>
<p>Elle aime l'essence (donne moi plus d'essence)<br />
L'essence la rend si heureuse (donne moi plus d'essence) x2</p>
<p>Elle allume les turbines<br />
Elle ne discrimine pas<br />
Elle ne se perd pas même pas dans une fête de BCBG<br />
Elle se rapproche jusque dans un coin<br />
Elle brille autant dans l'ombre<br />
Elle déchire, elle me domine<br />
Elle se déplace en voiture, en motos et limousines<br />
Elle remplit son réservoir d'adrénaline<br />
Quand elle écoute le reggaeton dans la cuisine</p>
<p>Elle aime l'essence (donne moi plus d'essence)<br />
L'essence la rend si heureuse (donne moi plus d'essence) x4</p>
<p>Ici on est les meilleurs<br />
Tu ne me froisses pas<br />
Sur la piste on nous appelle les tueurs<br />
Cela fait n'importe qui tomber amoureux<br />
Quand tu danses sur le rythme des tambours<br />
C'est réservé aux meufs de toutes les couleurs<br />
Pour les plus âgés pour les plus jeunes<br />
Pour les plus renardes que les chasseurs<br />
Pour les femmes qui n'éteignent pas leurs moteurs</p>
<p>Toi et moi on possède quelque chose en attente<br />
Tu me dois quelque chose et tu le sais<br />
Elle est perdue avec moi<br />
Elle ne rend des comptes à personne x2</p>
<p>Je fais du mambo pour que ma meuf allume son moteur<br />
Je fais du mambo pour que ma meuf allume son moteur<br />
Je fais du mambo pour que ma meuf allume son moteur<br />
Qu'elles se préparent à ce qui arrive c'est papi qu'il leur donne, Dur !</p>
<p>Chérie je sais que tu ne vas pas me quitter (dur)<br />
J'aime le fait que tu te laisses conduire (dur ! ! )<br />
Tous les week-ends elle sort vaciller (dur ! ! )<br />
Ma meuf n'arrête pas de sortir car</p>
<p>Elle aime l'essence (donne moi plus d'essence)<br />
L'essence la rend si heureuse (donne moi plus d'essence) x4</p>
]]></content:encoded>
<link>http://192.168.1.8/forum/index.php?id=5</link>
<guid>http://192.168.1.8/forum/index.php?id=5</guid>
<pubDate>Thu, 08 Oct 2015 00:02:42 +0000</pubDate>
<dc:creator>zaz</dc:creator>
</item>
<item>
<title>Gasolina</title>
<content:encoded><![CDATA[<p>Who´s this?</p>
<p>DA-DDY YAN-KEE<br />
Subele el mambo pa' q mis gatas prendan los motores,<br />
Subele el mambo pa' q mis gatas prendan los motores,<br />
Subele el mambo pa' q mis gatas prendan los motores,<br />
Que se preparen q lo q viene es pa q le den, duro!</p>
<p>Mamita yo se que tu no te me va' a quitar (duro!)<br />
Lo que me gusta es q tu te dejas llevar (duro!!)<br />
to los weekenes ella sale a vacilar (duro!!)<br />
mi gata no para de janguiar porq</p>
<p>A ella le gusta la gasolina (dame màs gasolina)<br />
Como le encanta la gasolina (dame màs gasolina)<br />
A ella le gusta la gasolina (dame màs gasolina)<br />
Como le encanta la gasolina (dame màs gasolina)</p>
<p>Ella prende las turbinas,<br />
No discrimina,<br />
No se pierde ni un party de marquesina,<br />
Se acicala hasta pa la esquina,<br />
Luce tan bien q hasta la sombra le combina,<br />
Asesina, me domina,<br />
Anda en carro, motoras y limosinas,<br />
Llena su tanque de adrenalina,<br />
Cuando escucha el reggaeton en la cocina.</p>
<p>A ella le gusta la gasolina (dame màs gasolina!!)<br />
Como le encanta la gasolina (dame màs gasolina!!)<br />
A ella le gusta la gasolina (dame màs gasolina!!)<br />
Como le encanta la gasolina (dame màs gasolina!!)</p>
<p>Aqui nosotros somos los mejores,<br />
No te me ajores,<br />
En la pista nos llaman los matadores,<br />
Haces q cualquiera se enamore,<br />
Cuando bailas al ritmo de los tambores,<br />
Esto va pa las gatas de to colores,<br />
Pa las mayores, pa las menores,<br />
Pa las que son mas zorras que los cazadores,<br />
Pa las mujeres que no apagan sus motores.</p>
<p>Tenemo' tu y yo algo pendiente,<br />
Tu me debes algo y lo sabes,<br />
Conmigo ella se pierde,<br />
No le rinde cuentas a nadie.<br />
Tenemo' tu y yo algo pendiente,<br />
Tu me debes algo y lo sabes,<br />
Conmigo ella se pierde,<br />
No le rinde cuentas a nadie.</p>
<p>Subele el mambo pa' q mis gatas prendan los motores,<br />
Subele el mambo pa' q mis gatas prendan los motores,<br />
Subele el mambo pa' q mis gatas prendan los motores,<br />
Que se preparen q lo q viene es pa q le den, duro!</p>
<p>Mamita yo se que tu no te me va' a quitar (duro!)<br />
Lo que me gusta es q tu te dejas llevar (duro!!)<br />
to los weekenes ella sale a vacilar (duro!!)<br />
mi gata no para de janguiar porq</p>
<p>A ella le gusta la gasolina (dame màs gasolina!!)<br />
Como le encanta la gasolina (dame màs gasolina!!)<br />
A ella le gusta la gasolina (dame màs gasolina!!)<br />
Como le encanta la gasolina (dame màs gasolina!!)<br />
A ella le gusta la gasolina (dame màs gasolina!!)<br />
Como le encanta la gasolina (dame màs gasolina!!)<br />
A ella le gusta la gasolina (dame màs gasolina!!)<br />
Como le encanta la gasolina (dame màs gasolina!!)</p>
]]></content:encoded>
<link>http://192.168.1.8/forum/index.php?id=4</link>
<guid>http://192.168.1.8/forum/index.php?id=4</guid>
<pubDate>Thu, 08 Oct 2015 00:02:01 +0000</pubDate>
<dc:creator>qudevide</dc:creator>
</item>
<item>
<title>Les mouettes ! (reply)</title>
<content:encoded><![CDATA[<p>Le terme « mouette » est issu de l'ancien normand mawe « mouette, goéland » suivi du suffixe diminutif -ette, mot probablement issu du vieil anglais maew qui a donné deux mots distincts en normand : la mauve (terme qualifiant en normand tous les laridés) et la mauwette, passé en français « mouette ». Au xiie siècle [w] a muté en [v].</p>
]]></content:encoded>
<link>http://192.168.1.8/forum/index.php?id=3</link>
<guid>http://192.168.1.8/forum/index.php?id=3</guid>
<pubDate>Wed, 07 Oct 2015 23:58:38 +0000</pubDate>
<dc:creator>thor</dc:creator>
</item>
<item>
<title>Les mouettes !</title>
<content:encoded><![CDATA[<p>Mouette [mwεt ] est un nom vernaculaire ambigu en français. On nomme mouettes les oiseaux de plusieurs genres de la sous-famille des Larinae et de la tribu des Larini, qui comprend aussi les goélands : il est d'usage dans la langue française de nommer « mouettes » les petits représentants de la tribu des Larini, le terme « goéland » étant réservé aux espèces de plus grande taille du genre Larus.</p>
<p>Sauf exception, il s'agit plutôt d'oiseaux côtiers blanc et gris au cri aigu caractéristique.</p>
]]></content:encoded>
<link>http://192.168.1.8/forum/index.php?id=2</link>
<guid>http://192.168.1.8/forum/index.php?id=2</guid>
<pubDate>Wed, 07 Oct 2015 23:57:57 +0000</pubDate>
<dc:creator>wandre</dc:creator>
</item>
<item>
<title>Welcome to this new Forum !</title>
<content:encoded><![CDATA[<p>Hey !</p>
]]></content:encoded>
<link>http://192.168.1.8/forum/index.php?id=1</link>
<guid>http://192.168.1.8/forum/index.php?id=1</guid>
<pubDate>Wed, 07 Oct 2015 23:57:07 +0000</pubDate>
<dc:creator>admin</dc:creator>
</item>
</channel>
</rss>
