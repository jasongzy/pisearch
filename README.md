# Pi Search

从 π 的小数点后 **1,000,000,000** 位中搜索指定的数字串位置

## π 的数据来源

使用 [y-cruncher](http://www.numberworld.org/y-cruncher/) 生成了包含 10 亿位十进制数字字符的文本文档 `./data/Pi - Dec - Chudnovsky.txt`（约 950 MB，未包含在仓库内）

为了加快 8 位生日的查询速度，预先遍历了 从 1900-01-01 至 2050-12-31 的所有合法日期，并将它们的位置存入了 SQLite 数据库（`./data/pi.db`）。`date_search_sqlite.py` 和 `pi-search.php` 均调用了此数据库以实现高速查询。

## 查询速度

如果直接遍历匹配原始的 txt 文件，搜索耗时将与目标出现的位置有关，最长约为 1.6 秒。

采用 SQLite 后，8 位生日的查询平均耗时在 1 ms 以下。

## 查询到的概率

从 N 位随机数中发现 d 位连续数字（N >> d）的概率为：

<img src="http://latex.codecogs.com/gif.latex?1-(1-0.1^d)^N" />

因此可以推测，在 π 的前 10 亿位中找到任意 8 位数字的概率约为 99.995%，实测从 1900 年至 2050 年的所有合法 "年月日" 8 位字符串都能从中找到。

## Inspired by

- [The Pi-Search Page](https://www.angio.net/pi/)
- [Irrational Numbers Search Engine](http://www.subidiom.com/pi/)
- [北大数院人 微信公众号](https://mp.weixin.qq.com/s?__biz=MzU3NzA0OTA5Mg==&mid=2247492451&idx=1&sn=e14e794bae706d7c2a4f964325d2e404)
