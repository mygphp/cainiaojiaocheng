CSS Backgrounds(背景):
    background	            简写属性，作用是将背景属性设置在一个声明中。
    background-attachment	背景图像是否固定或者随着页面的其余部分滚动。
    background-color	    设置元素的背景颜色。
    background-image	    把图像设置为背景。
    background-position	    设置背景图像的起始位置。
    background-repeat	    设置背景图像是否及如何重复。
CSS Text(文本):
    color	            设置文本颜色
    direction	        设置文本方向。
    letter-spacing	    设置字符间距
    line-height	        设置行高
    text-align	        对齐元素中的文本
    text-decoration	    向文本添加修饰
    text-indent	        缩进元素中文本的首行
    text-shadow	        设置文本阴影
    text-transform	    控制元素中的字母
    unicode-bidi	    设置或返回文本是否被重写 
    vertical-align	    设置元素的垂直对齐
    white-space	        设置元素中空白的处理方式
    word-spacing	    设置字间距
CSS Fonts(字体):
    font	        在一个声明中设置所有的字体属性
    font-family	    指定文本的字体系列
    font-size	    指定文本的字体大小
    font-style	    指定文本的字体样式
    font-variant	以小型大写字体或者正常字体显示文本。
    font-weight	    指定字体的粗细。
CSS 链接(link):
    a:link          未访问链接
    a:visited       已访问链接
    a:hover         鼠标移动到链接上
    a:active        鼠标点击时
CSS 列表样式(ul):
    list-style	        简写属性。用于把所有用于列表的属性设置于一个声明中
    list-style-image	将图象设置为列表项标志。
    list-style-position	设置列表中列表项标志的位置。
    list-style-type	    设置列表项标志的类型。
CSS Table(表格):
    border
    border-collapse
CSS 盒子模型:
CSS Border(边框):
    border	        简写属性，用于把针对四个边的属性设置在一个声明。
    
    border-style	用于设置元素所有边框的样式，或者单独地为各边设置边框样式。
    border-width	简写属性，用于为元素的所有边框设置宽度，或者单独地为各边边框设置宽度。
    border-color	简写属性，设置元素的所有边框中可见部分的颜色，或为 4 个边分别设置颜色。
    
    border-bottom	简写属性，用于把下边框的所有属性设置到一个声明中。
    border-bottom-color	设置元素的下边框的颜色。
    border-bottom-style	设置元素的下边框的样式。
    border-bottom-width	设置元素的下边框的宽度。
    
    border-left	        简写属性，用于把左边框的所有属性设置到一个声明中。
    border-left-color	设置元素的左边框的颜色。
    border-left-style	设置元素的左边框的样式。
    border-left-width	设置元素的左边框的宽度。
    
    border-right	    简写属性，用于把右边框的所有属性设置到一个声明中。
    border-right-color	设置元素的右边框的颜色。
    border-right-style	设置元素的右边框的样式。
    border-right-width	设置元素的右边框的宽度。
    
    border-top	        简写属性，用于把上边框的所有属性设置到一个声明中。
    border-top-color	设置元素的上边框的颜色。
    border-top-style	设置元素的上边框的样式。
    border-top-width	设置元素的上边框的宽度。
CSS 轮廓（outline）属性:
    outline	        设置所有的轮廓属性
    outline-color	设置轮廓的颜色
    outline-style	设置轮廓的样式
    outline-width	设置轮廓的宽度
CSS Margin(外边距):
    margin	        简写属性。在一个声明中设置所有外边距属性。
    margin-bottom	设置元素的下外边距。
    margin-left	    设置元素的左外边距。
    margin-right	设置元素的右外边距。
    margin-top	    设置元素的上外边距。
CSS Padding（填充）:
    padding	        使用缩写属性设置在一个声明中的所有填充属性
    padding-bottom	设置元素的底部填充
    padding-left	设置元素的左部填充
    padding-right	设置元素的右部填充
    padding-top	    设置元素的顶部填充
CSS 分组和嵌套:
    h1,h2,p         分组选择器
    .marked p       嵌套选择器
CSS 尺寸 (Dimension):
    height	    设置元素的高度。
    line-height	设置行高。
    max-height	设置元素的最大高度。
    max-width	设置元素的最大宽度。
    min-height	设置元素的最小高度。
    min-width	设置元素的最小宽度。
    width	    设置元素的宽度。
CSS Display(显示):
    隐藏元素 - display:none或visibility:hidden(占空间)
    块和内联元素 - display:inline和display:block
CSS Positioning(定位):
    static      HTML元素的默认值，即没有定位，元素出现在正常的流中。静态定位的元素不会受到 top, bottom, left, right影响。
    relative    相对定位元素的定位是相对其正常位置。可以移动的相对定位元素的内容和相互重叠的元素，它原本所占的空间不会改变。
    fixed       元素的位置相对于浏览器窗口是固定位置。即使窗口是滚动的它也不会移动。不占据空间。元素和其他元素重叠
    absolute    绝对定位的元素的位置相对于最近的已定位父元素，absolute 定位使元素的位置与文档流无关，因此不占据空间。absolute 定位的元素和其他元素重叠。
    z-index     指定了一个元素的堆叠顺序
CSS Float（浮动）:
    clear	指定不允许元素周围有浮动元素。
    float	指定一个盒子（元素）是否可以浮动。
CSS 对齐:
CSS 组合选择符:
    后代选取器(以空格分隔)            后代选取器匹配所有值得元素的后代元素。
    子元素选择器(以大于号分隔）       子元素选择器（Child selectors）只能选择作为某元素直接子元素的元素。
    相邻兄弟选择器（以加号分隔）      选择紧接在另一元素后的元素，且二者有相同父元素
    普通兄弟选择器（以破折号分隔）    后续兄弟选择器选取所有指定元素之后的相邻兄弟元素。
CSS 伪类:
    :checked    	        input:checked	        选择所有选中的表单元素
    :disabled   	        input:disabled	        选择所有禁用的表单元素
    :empty      	        p:empty	                选择所有没有子元素的p元素
    :enabled    	        input:enabled	        选择所有启用的表单元素
    :first-of-type	        p:first-of-type	        选择每个父元素是p元素的第一个p子元素
    :in-range   	        input:in-range	        选择元素指定范围内的值
    :invalid    	        input:invalid	        选择所有无效的元素
    :last-child 	        p:last-child	        选择所有p元素的最后一个子元素
    :last-of-type	        p:last-of-type	        选择每个p元素是其母元素的最后一个p元素
    :not(selector)	        :not(p)	                选择所有p以外的元素
    :nth-child(n)	        p:nth-child(2)	        选择所有p元素的第二个子元素
    :nth-last-child(n)	    p:nth-last-child(2)	    选择所有p元素倒数的第二个子元素
    :nth-last-of-type(n)	p:nth-last-of-type(2)	选择所有p元素倒数的第二个为p的子元素
    :nth-of-type(n)	        p:nth-of-type(2)	    选择所有p元素第二个为p的子元素
    :only-of-type	        p:only-of-type	        选择所有仅有一个子元素为p的元素
    :only-child	            p:only-child	        选择所有仅有一个子元素的p元素
    :optional	            input:optional	        选择没有"required"的元素属性
    :out-of-range	        input:out-of-range	    选择指定范围以外的值的元素属性
    :read-only	            input:read-only	        选择只读属性的元素属性
    :read-write	            input:read-write	    选择没有只读属性的元素属性
    :required	            input:required	        选择有"required"属性指定的元素属性
    :root	                root	                选择文档的根元素
    :target	                #news:target	        选择当前活动#news元素(点击URL包含锚的名字)
    :valid	                input:valid	            选择所有有效值的属性
    :link	                a:link	                选择所有未访问链接
    :visited	            a:visited	            选择所有访问过的链接
    :active	                a:active	            选择正在活动链接
    :hover	                a:hover	                把鼠标放在链接上的状态
    :focus	                input:focus	            选择元素输入后具有焦点
    :first-letter	        p:first-letter	        选择每个<p> 元素的第一个字母
    :first-line	            p:first-line	        选择每个<p> 元素的第一行
    :first-child	        p:first-child	        选择器匹配属于任意元素的第一个子元素的 <p> 元素
    :before	                p:before	            在每个<p>元素之前插入内容
    :after	                p:after	                在每个<p>元素之后插入内容
    :lang(language)	        p:lang(it)	            为<p>元素的lang属性选择一个开始值
CSS 伪元素:
    :link	        a:link	        选择所有未访问链接
    :visited	    a:visited	    选择所有访问过的链接
    :active	        a:active	    选择正在活动链接
    :hover	        a:hover	        把鼠标放在链接上的状态
    :focus	        input:focus	    选择元素输入后具有焦点
    :first-letter	p:first-letter	选择每个<p> 元素的第一个字母
    :first-line	    p:first-line	选择每个<p> 元素的第一行
    :first-child	p:first-child	选择器匹配属于任意元素的第一个子元素的 <]p> 元素
    :before	        p:before	    在每个<p>元素之前插入内容
    :after	        p:after	        在每个<p>元素之后插入内容
    :lang(language)	p:lang(it)	    为<p>元素的lang属性选择一个开始值
