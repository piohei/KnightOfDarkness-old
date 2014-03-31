<id>
flegmatyk:ggtlenjabber
</id>

<version>
0.05
</version>

<mod info>
Adds GG, Tlen and Jabber information to profile.
</mod info>

<author>
Kemac and Flegmatyk
</author>

<edit file>
Sources/Load.php
</edit file>

<search>
			mem.birthdate, mem.memberIP, mem.memberIP2, mem.ICQ, mem.AIM, mem.YIM, mem.MSN, mem.posts, mem.lastLogin,
</search>

<replace>
			mem.birthdate, mem.memberIP, mem.memberIP2, mem.ICQ, mem.AIM, mem.YIM, mem.MSN, mem.GG, mem.Tlen, mem.Jabber, mem.posts, mem.lastLogin,
</replace>

<search>
			mem.birthdate, mem.ICQ, mem.AIM, mem.YIM, mem.MSN, mem.posts, mem.lastLogin, mem.karmaGood,
</search>

<replace>
			mem.birthdate, mem.ICQ, mem.AIM, mem.YIM, mem.MSN, mem.GG, mem.Tlen, mem.Jabber, mem.posts, mem.lastLogin, mem.karmaGood,
</replace>


<search>
		'msn' => $profile['MSN'] !='' && (empty($modSettings['guest_hideContacts']) || !$user_info['is_guest']) ? array(
			'name' => &$profile['MSN'],
			'href' => 'http://members.msn.com/' . $profile['MSN'],
			'link' => '<a href="http://members.msn.com/' . $profile['MSN'] . '" target="_blank"><img src="' . $settings['images_url'] . '/msntalk.gif" alt="' . $profile['MSN'] . '" border="0" /></a>',
			'link_text' => '<a href="http://members.msn.com/' . $profile['MSN'] . '" target="_blank">' . $profile['MSN'] . '</a>'
		) : array('name' => '', 'href' => '', 'link' => '', 'link_text' => ''),
</search>

<add after>
		'Jabber' => $profile['Jabber'] != '' && (empty($modSettings['guest_hideContacts']) || !$user_info['is_guest']) ? array(
			'name' => &$profile['Jabber'],
			'href' => 'xmpp:' . $profile['Tlen'],
			'link' => '<a href="xmpp:' . $profile['Jabber'] . '"><img src="http://jabber.autocom.pl/estatus.php?jid=' . $profile['Jabber'] . '&iconset=amijabber&type=image" alt="' . $profile['Jabber'] . '" border="0" /></a>',
			'link_text' => '<a href="xmpp:' . $profile['Jabber'] . '">' . $profile['Jabber'] . '</a>'
		) : array('name' => '', 'href' => '', 'link' => '', 'link_text' => ''),

		'GG' => $profile['GG'] != '' && (empty($modSettings['guest_hideContacts']) || !$user_info['is_guest']) ? array(
			'name' => &$profile['GG'],
			'href' => 'gg://' . $profile['GG'],
			'link' => '<a href="gg://' . $profile['GG'] . '"><img src="http://www.gadu-gadu.pl/users/status.asp?id=' . $profile['GG'] . '" alt="' . $profile['GG'] . '" border="0" height="16" width="16" /></a>',
			'link_text' => '<a href="gg://' . $profile['GG'] . '">' . $profile['GG'] . '</a>'
		) : array('name' => '', 'href' => '', 'link' => '', 'link_text' => ''),

		'Tlen' => $profile['Tlen'] != '' && (empty($modSettings['guest_hideContacts']) || !$user_info['is_guest']) ? array(
			'name' => &$profile['Tlen'],
			'href' => 'http://ludzie.tlen.pl/' . $profile['Tlen'],
			'link' => '<a href="http://ludzie.tlen.pl/' . $profile['Tlen'] . '"><img src="http://status.tlen.pl/?u=' . $profile['Tlen'] . '&t=1" alt="' . $profile['Tlen'] . '" border="0" height="18" width="18" /></a>',
			'link_text' => '<a href="http://ludzie.tlen.pl/' . $profile['Tlen'] . '">' . $profile['Tlen'] . '</a>'
		) : array('name' => '', 'href' => '', 'link' => '', 'link_text' => ''),
</add after>


<edit file>
Sources/ManageMembers.php
</edit file>

<search>
				'db_fields' => array('ICQ', 'AIM', 'YIM', 'MSN'),
</search>

<replace>
				'db_fields' => array('ICQ', 'AIM', 'YIM', 'MSN', 'GG', 'Tlen', 'Jabber'),
</replace>

<edit file>
Sources/Memberlist.php
</edit file>

<search>
		'ICQ' => array(
			'label' => $txt[513],
			'width' => '25'
		),
</search>

<add before>
		'Jabber' => array(
			'label' => $txt['JabberShort'],
			'width' => '25'
		),
		'GG' => array(
			'label' => $txt['GaduShort'],
			'width' => '25'
		),
		'Tlen' => array(
			'label' => $txt['TlenShort'],
			'width' => '25'
		),
</add before>

<search>
		'ICQ' => array(
			'down' => 'LENGTH(mem.ICQ) > 0 DESC, ISNULL(mem.ICQ) OR mem.ICQ = 0 ASC, mem.ICQ ASC',
			'up' => 'LENGTH(mem.ICQ) > 0 ASC, ISNULL(mem.ICQ) OR mem.ICQ = 0 DESC, mem.ICQ DESC'
		),
</search>

<add before>
		'Jabber' => array(
			'down' => 'LENGTH(mem.Jabber) > 0 DESC, ISNULL(mem.Jabber) ASC, mem.Jabber ASC',
			'up' => 'LENGTH(mem.Jabber) > 0 ASC, ISNULL(mem.Jabber) DESC, mem.Jabber DESC'
		),
		'GG' => array(
			'down' => 'LENGTH(mem.GG) > 0 DESC, ISNULL(mem.GG) ASC, mem.GG ASC',
			'up' => 'LENGTH(mem.GG) > 0 ASC, ISNULL(mem.GG) DESC, mem.GG DESC'
		),
		'Tlen' => array(
			'down' => 'LENGTH(mem.Tlen) > 0 DESC, ISNULL(mem.Tlen) ASC, mem.Tlen ASC',
			'up' => 'LENGTH(mem.Tlen) > 0 ASC, ISNULL(mem.Tlen) DESC, mem.Tlen DESC'
		),
</add before>

<search>
			$fields += array(3 => 'MSN', 'AIM', 'ICQ', 'YIM');
</search>

<replace>
			$fields += array(3 => 'Jabber', 'GG', 'Tlen','MSN', 'AIM', 'ICQ', 'YIM');
</replace>


<edit file>
Sources/Profile.php
</edit file>

<search>
		'msn' => array('name' => empty($user_profile[$memID]['MSN']) ? '' : $user_profile[$memID]['MSN']),
</search>

<add after>
		'Jabber' => array('name' => empty($user_profile[$memID]['Jabber']) ? '' : $user_profile[$memID]['Jabber']),	
		'GG' => array('name' => empty($user_profile[$memID]['GG']) ? '' : $user_profile[$memID]['GG']),
		'Tlen' => array('name' => empty($user_profile[$memID]['Tlen']) ? '' : $user_profile[$memID]['Tlen']),		
</add after>

<search>
		'AIM', 'YIM',
</search>

<replace>
		'AIM', 'YIM', 'GG', 'Tlen', 'Jabber',
</replace>

<search>
	$fix_spaces = array('MSN', 'AIM', 'YIM');
</search>

<replace>
	if (isset($_POST['Tlen'])) $_POST['Tlen'] = preg_replace("/@tlen\.pl/i",'',$_POST['Tlen']);
	$fix_spaces = array('MSN', 'Jabber', 'GG', 'Tlen','AIM', 'YIM');
</replace>

<search>
		'msn' => array(
			'name' => empty($_POST['msn']) ? '' : stripslashes($_POST['MSN'])
		),
</search>

<add after>
		'Jabber' => array(
			'name' => empty($_POST['Jabber']) ? '' : stripslashes($_POST['Jabber'])
		),
		'GG' => array(
			'name' => empty($_POST['GG']) ? '' : stripslashes($_POST['GG'])
		),
		'Tlen' => array(
			'name' => empty($_POST['Tlen']) ? '' : str_replace('@tlen.pl','',stripslashes($_POST['Tlen']))
		),
</add after>


<edit file>
Sources/Register.php
</edit file>

<search>
		'AIM', 'YIM',
</search>

<replace>
		'AIM', 'YIM', 'Jabber', 'GG', 'Tlen',
</replace>

<edit file>
Themes/default/Display.template.php
</edit file>

<search>
								', $message['member']['icq']['link'], '
</search>


<add before>
								', $message['member']['Jabber']['link'], '
								', $message['member']['GG']['link'], '
								', $message['member']['Tlen']['link'], '
</add before>

<edit file>
Themes/default/Profile.template.php
</edit file>

<search>
	// Messenger type information.
	echo '
				<tr>
					<td colspan="2"><hr size="1" width="100%" class="hrcolor" /></td>
</search>	

<add after>
</tr><tr>
					<td><b>', $txt['Jabber'] ,':</b></td>
					<td>', $context['member']['Jabber']['link'], ' ', $context['member']['Jabber']['link_text'], '</td>
				</tr><tr>
					<td><b>', $txt['GaduGadu'] ,':</b></td>
					<td>', $context['member']['GG']['link'], ' ', $context['member']['GG']['link_text'], '</td>
				</tr><tr>
					<td><b>', $txt['Tlen'] ,':</b></td>
					<td>', $context['member']['Tlen']['link'], ' ', $context['member']['Tlen']['link_text'], '</td>
</add after>


<search>
							<tr>
								<td width="40%"><b>', $txt[513], ': </b><div class="smalltext">', $txt[600], '</div></td>
								<td><input type="text" name="ICQ" size="24" value="', $context['member']['icq']['name'], '" /></td>
</search>

<add before>
<tr>
								<td width="40%"><b>' ,$txt['Jabber'], ':</b><div class="smalltext">', $txt['ProfileJabber'] , '.</div></td>
								<td><input type="text" name="Jabber" size="24" value="', $context['member']['Jabber']['name'], '" />
							</tr>
							<tr>
								<td width="40%"><b>' ,$txt['GaduGadu'], ':</b><div class="smalltext">', $txt['ProfileGadu'], '.</div></td>
								<td><input type="text" name="GG" size="24" value="', $context['member']['GG']['name'], '" />
							</tr><tr>
								<td width="40%"><b>' ,$txt['Tlen'], ':</b><div class="smalltext">', $txt['ProfileTlen'], '.</div></td>
								<td><input type="text" name="Tlen" size="24" value="', $context['member']['Tlen']['name'], '" />
							</tr>
</add before>

<edit file>
Themes/default/Who.template.php
</edit file>

<search>
					', $member['icq']['link'], ' ', $member['msn']['link'], ' ', $member['yim']['link'], ' ', $member['aim']['link'], '
</search>

<replace>
					', $member['Jabber']['link'], ' ', $member['GG']['link'], ' ', $member['Tlen']['link'], ' ', $member['icq']['link'], ' ', $member['msn']['link'], ' ', $member['yim']['link'], ' ', $member['aim']['link'], '
</replace>

<edit file>
Themes/default/Memberlist.template.php
</edit file>

<search>
			<td colspan="12">';
</search>
<replace>
			<td colspan="15">';
</replace>
<search>
			<td colspan="12" class="', empty($settings['use_tabs']) ? 'catbg' : 'titlebg', '">';
</search>
<replace>
			<td colspan="15" class="', empty($settings['use_tabs']) ? 'catbg' : 'titlebg', '">';
</replace>
<search>
			<td class="windowbg2">', $member['icq']['link'], '</td>
</search>
<add before>
			<td class="windowbg2">', $member['Jabber']['link'], '</td>
			<td class="windowbg2">', $member['GG']['link'], '</td>
			<td class="windowbg2">', $member['Tlen']['link'], '</td>
</add before>

<search>
			<td colspan="12" class="windowbg">', $txt[170], '</td>
</search>
<replace>
			<td colspan="15" class="windowbg">', $txt[170], '</td>
</replace>
<search>
			<td class="titlebg" colspan="12">', $txt[139], ': ', $context['page_index'], '</td>
</search>
<replace>
			<td class="titlebg" colspan="15">', $txt[139], ': ', $context['page_index'], '</td>
</replace>

<edit file>
Themes/default/languages/index.english.php
</edit file>
<search>
$txt['MSN'] = 'MSN';
</search>
<add after>
$txt['Tlen'] = 'Tlen';
$txt['GaduGadu'] = 'GaduGadu';
$txt['Jabber'] = 'Jabber';
$txt['TlenShort'] = 'O2';
$txt['GaduShort'] = 'GG';
$txt['JabberShort'] = 'Jab';
$txt['ProfileTlen'] = 'Please enter your Tlen identifier';
$txt['ProfileGadu'] = 'Please enter your GaduGadu number';
$txt['ProfileJabber'] = 'Please enter your JID';
</add after>
        </file>

<edit file>
Themes/default/languages/index.polish.php
</edit file>
<search>
$txt['MSN'] = 'MSN';
</search>
<add after>
$txt['Tlen'] = 'Tlen';
$txt['GaduGadu'] = 'GaduGadu';
$txt['Jabber'] = 'Jabber';
$txt['TlenShort'] = 'O2';
$txt['GaduShort'] = 'GG';
$txt['JabberShort'] = 'Jab';
$txt['ProfileTlen'] = 'Podaj swój identyfikator w Tlenie';
$txt['ProfileGadu'] = 'Podaj swój numerek Gadu Gadu';
$txt['ProfileJabber'] = 'Podaj swój adres Jabbera';
</add after>
        </file>
