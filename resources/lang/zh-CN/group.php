<?php

return [
    'my'         => '我的群组',
    'trending'   => '时下流行',
    'members'    => '{0} :count 位成员|{1} :count 位成员|[2,*] :count 位成员',
    "create"     => [
        "title" => "创建新的群组",
        "description" => "点击这里创建您的群组！",
        'groupName' => '群组名称',
        'shortCode' => '群组短码',
        'description' => '群组简介',
        'joinPolicy' => '加入政策',
        'inviteOnly' => '仅邀请',
        'applyOnly' => '仅申请',
        'both' => '邀请或申请',
        'public' => '公开群组',
        'create' => '创建群组',
        'errorInvalidValue' => '小组的名字和短码长度必须在3到50之间，简介长度必须短于60000字',
        'errorImageLarge' => '选择的图片过大'
    ],
    'detail' => [
        'reportAbuse' => '提交举报',
        'public' => '公开群组',
        'private' => '私有群组',
        'group' => '群组',
        'tags' => '群组标签:',
        'acceptInvitation' => '接受邀请',
        'joined' => '已加入',
        'exit' => '退出',
        'inviteOnly' => '仅邀请',
        'join' => '加入',
        'waiting' => '等待处理中',
        'description' => '简介',
        'leader' => '组长',
        'invitation' => '邀请制',
        'application' => '申请制',
        'joinPolicy' => '加入政策',
        'contestCount' => ':ahead 尚未开始, :going 正在进行, :passed 已结束',
        'contests' => '比赛',
        'createTime' => '群组创建时间',
        'analysis' => '查看分析',
        'notice' => '发布公告',
        'homework' => '查看作业',
        'contest' => '发布比赛',
        'invite' => '邀请成员',
        'problems' => '题目管理',
        'settings' => '更多设置',
        'nothingTimeline' => '最近没啥事',
        'contestTitle' => '比赛标题',
        'contestBeginTime' => '比赛开始时间',
        'myProfile' => '我的资料',
        'edit' => '编辑',
        'nickname' => '昵称',
        'none' => '无',
        'subGroup' => '子群组',
        'members' => '成员',
        'kick' => '移除',
        'approve' => '同意',
        'decline' => '婉拒',
        'retrieve' => '撤回',
        'noticeAnnouncement' => '发布公告',
        'noticeTitle' => '公告标题',
        'noticeContent' => '公告内容',
        'noticeClose' => '取消',
        'noticeSubmit' => '发布',
        'inviteMember' => '邀请成员',
        'inviteEmail' => '电子邮箱',
        'inviteClose' => '取消',
        'inviteConfirm' => '邀请',
        'profile' => '资料',
        'profileClose' => '关闭',
        'profileApply' => '应用'
    ],
    'message'    => [
        'agreeJoin' => [
            'title'   => '他们已同意加入您的群组 :name',
            'content' => ''
        ],
        'appliedJoin'=> [
            'title'   => '有人申请加入您的群组 :name',
            'content' => ''
        ],
        'inviteJoin' => [
            'title'   => ':sender_name 邀请您加入 :group_name',
            'content' => '嗨,  **:reciver_name**,\n\n  **:sender_name** 刚刚邀请您加入 **[:group_name](:group_url)** 群组. 现在就看一看，认识一些有趣的人吧!\n\n NOJ'
        ]
    ],
    'general' => [
        'groupName' => '组名',
        'changeNameTip' => '为您的小组指定新的名字',
        'joinPolicy' => '加入政策',
        'invitation' => '邀请制',
        'application' => '申请制',
        'invitationOnly' => '仅允许邀请',
        'applicationOnly' => '仅允许申请',
        'changeGroupImage' => '修改群组头像',
        'changeGroupImageTip' => '点击图片以上传新的图片',
        'errorAvatarFast' => '慢点！',
        'errorChosseLocalFile' => '请选择一个本地图片',
        'errorFileLarge' => '您选择的图片太大了',
    ],
    'member' => [
        'permissionManagement' => '权限管理',
        'promote' => '权限升级',
        'demote' => '权限降级',
        'groupAnnouncement' => '群组宣言',
        'title' => '标题',
        'content' => '内容',
        'submit' => '提交',
        'modifySubGroup' => '修改子小组',
        'modifySubGroupContent1' => '把 ',
        'modifySubGroupContent2' => ' 的子小组修改为',
        'subGroup' => '子小组名'
    ],
    'analysis' => [
        'title' => '训练赛分析',
        'contests' => '按比赛',
        'tags' => '按标签',
        'developing' => '开发中...',
        'downloadAsExcel' => '下载为excel文件',
        'showByPercent' => '百分比显示',
        'hideMaximum' => '隐藏最大值',
        'tips' => '<p>操作方式.</p><p>点击列名可以排序.</p><p> 点击名字可以屏蔽ta.</p><p> 点击某人的elo分可以查看他的elo分变化历史.',
        'eloChangeHistory' => 'Elo分变化历史',
        'contestName' => '比赛名',
        'afterContestElo' => '比赛结束后Elo分值',
        'close' => '关闭',
        'tagRader' => '标签雷达',
        'chartLabelElo' => 'Elo分值',
        'chartLabelTag' => 'Tag完成度',
    ],
    'common' => [
        'backToGroupPage' => '返回主页',
        'generalSettings' => '一般设置',
        'memberSettings' => '成员管理',
        'problemsManagement' => '题库管理',
        'contestManagement' => '比赛管理',
        'homeworkManagement' => '作业管理',
        'practiceAnalysis' => '训练分析',
        'dangerField' => '危险操作'
    ],
    'homework'=>[
        'create' => '创建作业',
        'list' => '所有作业',
        'title' => '作业标题',
        'description' => '作业概述',
        'ended_at' => '作业截至日期',
        'due' => '本次作业截止于',
    ],
    'contest' =>[
        'arrangeContest' => '发布比赛' ,
        'arrange' => '发布',
        'successArrange' => '比赛发布成功，是否跳转到比赛页面?',
        'jumpTo' => '跳转',
        'return' => '返回',
        'assignee' => '负责人',
        'contestName' => '比赛名',
        'contestBeginTime' => '比赛开始时间',
        'contestEndTime' => '比赛结束时间',
        'publicContest' => '公开比赛',
        'practiceContest' => '训练赛',
        'statusVisibility' => '提交可见性',
        'viewAll' => '可见',
        'viewOnlyOnself' => '仅自己的可见',
        'viewNothing' => '不可见',
        'problems' => '题目',
        'no' => '序号',
        'code' => '题号',
        'score' => '分数',
        'opr' => '操作',
        'addProblem' => '添加题目',
        'description' => '比赛简介',
        'update' => '更新',
        'assignMember' => '指定比赛负责人',
        'cancel' => '取消',
        'problemCode' => '题号',
        'close' => '关闭',
        'add' => '添加',
        'errorContestTimeShort' => '比赛时间起码1分钟。',
        'noChargeContest' => '您没有负责任何比赛。',
        'noContestInGroup' => '本群组尚未创建比赛。',
        'noOneAssigned' => '本比赛没有指定负责人，点击以指定。',
        'deleteProblemTip' => '删除这个题目',
        'errorProblemNonExist' => '题目不存在',
        'errorLoading' => '正在加载比赛信息，慢点',
        'errorEmptyName' => '比赛名不能为空',
        'errorEmptyBeginTime' => '比赛开始时间不能为空',
        'errorEmptyEndTime' => '比赛结束时间不能为空',
    ],
    'problem' => [
        'title' => '群组题目管理',
        'empty' => '没有您可以操作的题目',
        'no' => '序号',
        'problem' => '题目',
        'addTagTip' => '为这个题目添加标签',
        'removeTagTip' => '点击以移除标签',
        'deleteTagConfirm' => '您确定要删除这个标签？',
        'errorTagNameEmpty' => '标签名不能为空'
    ],
    'danger' => [
        'groupEloRanking' => '群组Elo排名',
        'refresh' => '刷新',
    ]
];
