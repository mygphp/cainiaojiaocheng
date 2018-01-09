Memcached get 命令获取存储在 key(键) 中的 value(数据值) ，如果 key 不存在，则返回空。
    get 命令的基本语法格式如下：
        get key
    多个 key 使用空格隔开，如下:
        get key1 key2 key3
    参数说明如下：
        key：键值 key-value 结构中的 key，用于查找缓存值。