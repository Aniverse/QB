[![QuickBox](https://cdn.quickbox.io/file/2018/04/qb_logo_original.svg "QuickBox")](https://quickbox.io)

> Click [here](https://github.com/amefs/QB/blob/master/README.md) to view the original English README  
> 点击 [这里](https://amefs.net/archives/1613.html) 查看 efs 大佬的文章  

### Usage

```
bash -c "$(wget --no-check-certificate -qO- https://github.com/Aniverse/QB/raw/AniverseMod/setup/quickbox-setup)"
```

## QuickBox Aniverse Mod

这个版本是在 [efs 的修改版](https://github.com/amefs/QB) 上再次修改的版本  
我的改动比较粗糙，基本上只改了 setup，其他没怎么动，仅在 Vultr VPS Debian 8 下测试过，其他情况没试过（懒）  
这些改动带来的小问题应该是有的（不过原版的 QuickBox 本身小问题也很多……），然而我之后也不一定会维护这个版本……  

* Flexget：增加 Flexget 的安装，预设模板，开启 WebUI
* Flexget：本人水平菜+人懒，没有做面板上安装 Flexget 的功能，也没做面板上开关 Flexget daemon 的功能
* Single-user：说明下，transmission/qbittorrent/flexget 都是单用户模式的，懒得改了
* Deluge：改为必装软件，增加 1.3.9／1.3.13／1.3.15 跳校验版 等可选版本
* Deluge：增加 Stats、TotalTraffic、AutoRemovePlus、YaRSS2 等一堆插件
* Deluge：默认开启 ltconfig 0.3.1 的高性能做种模式
* Deluge：重写安装步骤
* Deluge：使用 deb 包来安装 libtorrent-rasterbar 1.0.11，节省时间
* Deluge：修改 Core、WebUI 的默认设置，增大连接数，增加启用插件等等
* qBittorrent：面板上的安装步骤我没做修改（都做成必装了也不需要在面板上安装了）
* qBittorrent：改为必装软件，增加 3.3.11／3.3.16／4.0.4／4.1.0 等可选版本
* qBittorrent：重写 qBittorrent 的安装步骤
* qBittorrent：使用 deb 包在 Debian 8 下安装 qt 5.5.1，节省时间
* qBittorrent：修改默认设置，关闭 UTP、PeX 等等
* rTorrent：默认选项改为 0.9.4
* ruTorrent：为 spectrogram 插件安装 sox
* Transmission：默认选项改为 Yes
* UI：移除询问是否为 10Gbps 盒子的问题
* UI：移除是否安装 ffmpeg 的问题，使用 ffmpeg static builds
* UI：移除用哪个面板主题的问题
* UI：修改安装用时的统计，精确到秒
* UI：安装软件提问顺序改变
* UI：部分界面调整
* Dashboard：安装 Flexget 的话会修改 custom menu，增加国内站点以及 Flexget 的链接
* 把安装 git lsb-release，git clone 等步骤写到脚本里，简化运行命令
* 对于内存小于 2333MB 的盒子启用 swap
* 安装 bluray、jietu 等脚本
* 安装 BBR 时内核选择 4.11.12  
* 取消对于 Ubuntu 15.10 的支持
* 不修改 SSH 端口
* 输入密码处可以编辑


## QuickBox efs Mod

这里是 efs 大佬修改版的部分更新内容，此外这里的部分改动又被我覆盖了  

* Deluge：不使用 GitHub 的源码，不会出现版本号带 dev 的情况
* Deluge：重写了 libtorrent-rasterbar 的安装，解决 Deluge／qBittorrent lt “冲突” 的问题
* Deluge：增加 YaRSS2 Deluge 插件
* qBittorrent：Debian 8 下编译 qt 5.9.5 解决依赖问题
* qBittorrent：增加 qBittorrent 的安装，使用 4.0.x 分支
* Transmission：修复强化版 WebUI 安装的问题
* Transmission：修复控制面板上开关失效的问题
* rTorrent：0.9.6 / 0.9.4 支持 IPv6
* Apache：设置 Deluge／qBittorrent／Transmission 的反代
* Dashboard：修复通过面板安装 Transmission 存在的问题
* Dashboard：可以在 Dashboard 上安装 qBittorrent
* Dashboard：可以在 Dashboard 上开关 qBittorrent，显示其中加载的种子数量
* 重新支持 Debian 8 系统
* 增加对使用博通 nic 的服务器内核更新支持
* 更新中文与英文的语言文件
* 改进 updateQuickBox 脚本
* 改进 changeuserpasswd 脚本，支持修改 qb 密码
* 各种其他 bug 修复
* 部分默认选项修改


![QB-Example-2](https://cache.amefs.net/wp-content/uploads/2018/05/01125944/QB-Example-2.png)
