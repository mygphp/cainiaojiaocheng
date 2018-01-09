Memcached incr 与 decr 命令用于对已存在的 key(键) 的数字值进行自增或自减操作。
    incr 与 decr 命令操作的数据必须是十进制的32位无符号整数。
    如果 key 不存在返回 NOT_FOUND，如果键的值不为数字，则返回 CLIENT_ERROR，其他错误返回 ERROR。
    incr 命令的基本语法格式如下：
        incr key increment_value
    参数说明如下：
        key：键值 key-value 结构中的 key，用于查找缓存值。
        increment_value： 增加的数值。