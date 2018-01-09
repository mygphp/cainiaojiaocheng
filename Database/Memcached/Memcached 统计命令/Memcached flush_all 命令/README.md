Memcached flush_all 命令用于用于清理缓存中的所有 key=>value(键=>值) 对。
该命令提供了一个可选参数 time，用于在制定的时间后执行清理缓存操作。
    flush_all 命令的基本语法格式如下：
    flush_all [time] [noreply]