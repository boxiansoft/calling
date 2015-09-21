<div class="about_left_list">
	<div class="aboutLeft">
		<ul>
			<{section name=about loop=$aboutList}>
			<{if $aboutList[about].id==$smarty.get.id}>
			<li class="currentAboutMenu"><a href="question.php?id=<{$aboutList[about].id}>"><{$aboutList[about].title}></a></li>
			<{else}>
			<li class="aboutMenu"><a href="question.php?id=<{$aboutList[about].id}>"><{$aboutList[about].title}></a></li>
			<{/if}>
			<{/section}>
		</ul>			
	</div>
	<div class="about_left_contact_border">
		<div class="about_left_contact"><span>137-6169-8603</span></div>
	</div>
</div>