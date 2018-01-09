Memcached gets 命令获取带有 CAS 令牌存 的 value(数据值) ，如果 key 不存在，则返回空。
    gets 命令的基本语法格式如下：
        gets key
    多个 key 使用空格隔开，如下:
        gets key1 key2 key3
    参数说明如下：
        key：键值 key-value 结构中的 key，用于查找缓存值。