android-php-shijian
===================
《android与php最佳实践》一书的源码


《Android和PHP最佳实践》官方站:http://code.google.com/p/android-php/

欢迎大家加入Android和PHP技术交流群：122860896

图书资源下载
Xampp 开发环境下载：http://pan.baidu.com/share/link?shareid=531771&uk=773037279

微博实例完整源码包下载：http://pan.baidu.com/share/link?shareid=531769&uk=773037279

Hush Framework 框架源码及相关资源下载：http://code.google.com/p/hush-framework/downloads/list

其他 Android 客户端的实例源码请到以下地址下载：http://code.google.com/p/android-php/downloads/list

微博实例源码安装步骤（for Windows）

下载 “图书资源下载” 列表中前两项的内容。

解压下载到的 Xampp 开发环境（xampp.zip）到 D:\xampp 目录下。

点击 D:\xampp 目录下的 setup_xampp.bat 文件，输入1，然后回车，安装好 Xampp。

把 D:\xampp\php 和 D:\xampp\mysql\bin 目录加入到 Windows 系统环境变量 Path 中去。

解压下载到的微博实例完整源码包（android-php-source.zip），并拷贝目录 android-php-source 下的所有文件到 D:\workspace 目录下，比如：D:\workspace\hush-framework。
使用源码目录（D:\workspace）下的 httpd-vhosts.conf 文件覆盖 D:\xampp\apache\conf\extra 目录下的同名 Apache 配置文件。
在 Xampp 控制台（D:\xampp\xampp-control.exe）启动 Xampp 的 Apache 和 MySQL。
打开系统命令提示符，进入 D:\workspace\hush-framework\hush-app\bin 目录，运行“hush sys init”命令初始化 Hush Framework 框架实例。
打开系统命令提示符，进入 D:\workspace\android-php-weibo\server\bin 目录，运行“cli sys init”命令初始化微博应用服务端的实例。
修改 Windows 系统本地 hosts 文件（C:\WINDOWS\system32\drivers\etc\hosts），在文件末尾加入以下虚拟站点配置：

127.0.0.1 hush-app-frontend
127.0.0.1 hush-app-backend

重启 Xampp 的 Apache 和 MySQL，依次访问以下站点，确保可访问。

Hush Framework 实例前台：http://hush-app-frontend

Hush Framework 实例后台：http://hush-app-backend

本书微博实例 API 调试后台：http://127.0.0.1:8001

本书微博实例 WEB 站点：http://127.0.0.1:8002

使用 ipconfig 命令获取本机的局域网地址，比如 192.168.1.28（也可以直接用 Android 模拟器的映射地址 10.0.2.2），然后找到服务端源码中的 etc/app.config.php 文件，以及客户端源码 com.app.demos.base 包中的 C.java 文件，将 192.168.1.2 替换成本机的局域网地址（或者 10.0.2.2）。
将客户端源码安装到 Android 模拟器上，即可运行！

特别说明：
如果遇到运行“cli doc build”无法生成文档的问题，请到Downloads页面下载微博实例源码修正包（weibo-patch-20130502.zip），解压并覆盖到原来的源码目录（android-php-weibo）下即可。
常见问题解答（沙龙精选）

问题1：本书的客户端实例是基于Android哪个版本开发的，使用新版SDK是否会有问题？

考虑到向上的兼容性，本书所有客户端实例都是基于Android2.2来开发的。客户端实例源码的安装过程很简单，只需要把客户端实例源码导入到Eclipse中，然后在“项目属性”中设置Android的SDK版本为Android2.2版，即可运行。本书的实例均经过专门的测试，都是可以正常运行的；如果在实例源码安装过程中遇到问题，请到作者博客（http://blog.csdn.net/shagoo）进行提问。

问题2：我是Android的初学者，可以些学习的建议吗？

从Androider的角度，建议按照以下步骤学习本书：

阅读《第2章.Android开发准备》学习Android开发基础精要。
阅读4、5两章了解本书微博实例的项目架构和规划。
阅读《第3章.PHP开发准备》学习PHP开发基础精要。
阅读《第6章.服务端开发》学习使用PHP开发服务端接口。
阅读《第7章.客户端开发》学习如何结合PHP服务器API开发移动互联应用。
阅读8到10章，学习服务端和客户端的压力测试和优化方法。
阅读剩下的进阶章节学习Android特色功能开发、游戏开发以及其他扩展知识。
本书不仅能让你学到Android客户端开发的技巧精要，还可以学到流行脚本语言PHP的用法以及服务端开发的知识，准备篇、实战篇、优化篇、进阶篇的内容层层递进、由浅入深，非常适合初学者进行系统的学习。另外，本书的内容也十分丰富，可以当作参考手册来使用。
问题3：如果只会一点PHP，不会Android的开发，如何同时学好PHP和Android？

从PHPer的角度，建议按照以下步骤学习本书：

阅读《第3章.PHP开发准备》学习PHP开发基础精要。
阅读4、5两章，了解本书微博实例的项目架构和规划。
阅读《第6章.服务端开发》学习使用PHP开发服务端接口。
阅读《第2章.Android开发准备》学习Android开发基础精要。
阅读《第7章.客户端开发》学习如何结合PHP服务器API开发移动互联应用。
阅读8到10章，学习服务端和客户端的压力测试和优化方法。
阅读剩下的进阶章节学习Android特色功能开发、游戏开发以及其他扩展知识。
PHP和Android（Java）毕竟是两种不同的语言，学习的时候注意多类比，多思考；相信对你的编程之路会很有帮助。就本书的内容比重而言，Android和PHP各占一半左右，比较合适对移动互联网有兴趣的读者来拓宽思路，当然如果你对作架构有兴趣的话，本书也是不错的选择。
问题4：应用服务端开发和常见WEB站点的开发有什么不同？

应用服务端开发确实和开发普通的WEB站点不大一样。最直观的不同点就是应用服务端都是API形式的，而web站点是有界面的。从调试的角度来看，API的调试会更加麻烦一些，恰好本书的PHP服务端框架提供了一套很方便的调试框架，有兴趣的话可以多研究一下~

问题5：运行初始化命令（hush/cli sys init）后提示数据库导入失败如何解决？

错误提示1：提示 Can't connect to MySQL server on '127.0.0.1'
解决方法1：原因是本地 MySQL 没有启动。请确认一下 Xampp 的 MySQL 服务是否已启动。
错误提示2：提示 Access denied for user 'root'@'localhost'
解决方法2：原因是MySQL密码不对。如果不想改变原有密码，可以修改数据库配置文件 etc/database.mysql.php，将文件中的 self::DEFAULT_PASS 修改成现有的 root 密码；或者直接使用 mysqladmin -u root -p password passwd 将 root 密码改为 passwd。
问题6：微博客户端为何无法连接服务器（提示“网络错误”）？

首先，请确认本机的微博服务端是否已经启动，即 http://127.0.0.1:8001 是否可以访问；如果可以，请再确认本机的局域网地址是什么（Windows 下可使用 ipconfig 命令获取，比如：192.168.1.28；或者直接使用 Android 模拟器的映射地址 10.0.2.2），然后，找到客户端源码 com.app.demos.base 包中的 C.java 文件，将 192.168.1.2 替换成本机的局域网地址（或者 10.0.2.2），重新安装运行微博客户端即可。此外，最好把服务端代码中的 etc/app.config.php 中的 HOST_SERVER 和 HOST_WEBSITE 常量也替换掉，这样不至于出现其他问题。

问题7：服务端代码报错提示：Strict Standards: Non-static method MysqlConfig::getInstance() should not be called statically ...？

与PHP新版本冲突导致的报警信息，请从SVN更新最新的Hush Framework代码，或者找到Hush/Db/Config.php，将179行注释掉即可“//abstract public function getInstance();”
