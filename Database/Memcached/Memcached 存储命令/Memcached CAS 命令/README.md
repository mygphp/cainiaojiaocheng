Memcached CAS（Check-And-Set 或 Compare-And-Swap） 命令用于执行一个"检查并设置"的操作
    它仅在当前客户端最后一次取值后，该key 对应的值没有被其他客户端修改的情况下， 才能够将值写入。
    检查是通过cas_token参数进行的， 这个参数是Memcach指定给已经存在的元素的一个唯一的64位值。
    CAS 命令的基本语法格式如下：
        cas key flags exptime bytes unique_cas_token [noreply]
        value
    参数说明如下：
        key：键值 key-value 结构中的 key，用于查找缓存值。
        flags：可以包括键值对的整型参数，客户机使用它存储关于键值对的额外信息 。
        exptime：在缓存中保存键值对的时间长度（以秒为单位，0 表示永远）
        bytes：在缓存中存储的字节数
        unique_cas_token通过 gets 命令获取的一个唯一的64位值。
        noreply（可选）： 该参数告知服务器不需要返回数据
        value：存储的值（始终位于第二行）（可直接理解为key-value结构中的value）
    要在 Memcached 上使用 CAS 命令，你需要从 Memcached 服务商通过 gets 命令获取令牌（token）。
    gets命令的功能类似于基本的 get 命令。两个命令之间的差异在于，
    gets 返回的信息稍微多一些：64 位的整型值非常像名称/值对的"版本" 标识符。