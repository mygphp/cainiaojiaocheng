Memcached delete 命令用于删除已存在的 key(键)。
    delete 命令的基本语法格式如下：
        delete key [noreply]
    参数说明如下：
        key：键值 key-value 结构中的 key，用于查找缓存值。
        noreply（可选）： 该参数告知服务器不需要返回数据