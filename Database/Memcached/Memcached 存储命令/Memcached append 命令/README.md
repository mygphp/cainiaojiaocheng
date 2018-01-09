Memcached append 命令用于向已存在 key(键) 的 value(数据值) 后面追加数据 。
    append 命令的基本语法格式如下：
        append key flags exptime bytes [noreply]
        value
    参数说明如下：
        key：键值 key-value 结构中的 key，用于查找缓存值。
        flags：可以包括键值对的整型参数，客户机使用它存储关于键值对的额外信息 。
        exptime：在缓存中保存键值对的时间长度（以秒为单位，0 表示永远）
        bytes：在缓存中存储的字节数
        noreply（可选）： 该参数告知服务器不需要返回数据
        value：存储的值（始终位于第二行）（可直接理解为key-value结构中的value）