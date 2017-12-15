**************************************************************
git操作：
git --version :当前git版本
git config --list :检查已有的配置信息
git init :初始化当前文件夹为仓库
git clone url :克隆仓库
ls -a :仓库中的文件列表
git status -s :查看项目的当前状态
git add :将文件添加到缓存
git diff :显示已写入缓存与已修改但尚未写入缓存的改动的区别
    尚未缓存的改动：git diff
    查看已缓存的改动： git diff --cached
    查看已缓存的与未缓存的所有改动：git diff HEAD
    显示摘要而非整个 diff：git diff --stat
git commit -m '' :将缓存区内容添加到仓库中
git commit -am '' :跳过git add步骤
git reset HEAD --file :命令用于取消已缓存的内容。
git rm :要从 Git 中移除某个文件，就必须要从已跟踪文件清单中移除，然后提交
git rm -f <file> :如果删除之前修改过并且已经放到暂存区域的话，则必须要用强制删除选项 -f
git rm --cached <file> :如果把文件从暂存区域移除，但仍然希望保留在当前工作目录中，使用 --cached 选项即可
git rm –r * :可以递归删除，即如果后面跟的是一个目录做为参数，则会递归删除整个目录中的所有子目录和文件
git mv :命令用于移动或重命名一个文件、目录、软连接。

git branch :列出分支
git branch (branchname) :创建分支
git checkout (branchname) :切换分支
git merge :你可以多次合并到统一分支， 也可以选择在合并之后直接删除被并入的分支
git checkout -b (branchname) :命令来创建新分支并立即切换到该分支下
git branch -d (branchname) :删除分支
git merge (branchname) :合并分支

git log :命令列出历史提交记录
git log --oneline :查看历史记录的简洁的版本。
git log --oneline --graph :查看历史中什么时候出现了分支、合并。以下为相同的命令，开启了拓扑图选项
git log --reverse --oneline :逆向显示所有日志


git remote :查看当前配置有哪些远程仓库，可以用命令
git remote -v :执行时加上 -v 参数，你还可以看到每个别名的实际链接地址
git fetch origin :从远程仓库下载新分支与数据
git merge origin/master :从远端仓库提取数据并尝试合并到当前分支,执行 git fetch 之后紧接着执行 git merge 远程分支到你所在的任意分支
cat filename :查看文件内容
git push -u [alias] [branch] :推送你的新分支与数据到某个远端仓库命令：
git remote rm [别名] :删除远程仓库