
<table border=1 cellspacing="0" cellpadding="0" style="border-collapse:collapse;width:620px">
	<tbody>
		<tr>
			<td style="font-size:16px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;background:#999999;color:#ffffff;font-weight:bold;vertical-align:baseline;letter-spacing:-0.03em;text-align:left;padding:5px 20px">
				myskills - atualização semanal
			</td>
		</tr>
		<tr>
			<td align="center">
				<table border=1 cellspacing="0" cellpadding="0" style="border-collapse:collapse;width:580px">
					<tbody>
						<tr><td>&nbsp;</td></tr>
						<tr>
							<td style="font-size:14px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;background:#ffffff;color:#000000;vertical-align:baseline;letter-spacing:-0.03em;text-align:left;padding:5px 20px">
								<p>Bom dia {{$user->name}},</p>
								<p><strong>Alguns usuários receberam de ontem para hoje 3 cópias de teste do boletim semanal, 
									pedimos desculpas pelo ocorrido e pedimos que ignorem o conteúdo.</strong></p>
								<p>Para a semana de 04/03/2013 a 11/03/2013, temos as seguintes novidades:</p>
								<ul>
									<li><a href="http://www.myskills.com.br/pt/channel" target="_blank"><strong>Canal de Atendimento</strong></a> 
										- Agora já temos um canal oficial de atendimento onde você pode registrar suas sugestões, 
										críticas e/ou dúvidas. Inclusive reclamar que recebeu o boletim 3 vezes :)</li>
									<li><strong>Facebook Wall</strong> - Para os usuários que acessam utilizando o login do Facebook, agora os 
										badges do MySkills são tambem objetos no formato Open Graph. Uma das primeiras vantagens é
										que você poderá ter todos os seus badges agrupados no seu mural do facebook.</li>
									<li><strong>Filtros</strong> - Estamos fazendo os primeiros testes com filtros na primeira página. Lá você
										já consegue filtrar todos os desenvolvedores e gerentes certificados, além de saber quem
										são os desenvolvedores mobile e os que os com perfil acadêmico, que possuem o badge de 
										mestre ou de doutor. Outros tipos e formas de filtragem virão em breve.</li>
								</ul>

								<p>Novos usuários que atingiram o nível 2 essa semana.</p>
								<table border=1 cellspacing="0" cellpadding="0" style="border-collapse:collapse;width:540px">
									<tbody>
										<tr>
											<td style="font-size:14px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;background:#ffffff;color:#000000;font-weight:bold;vertical-align:baseline;letter-spacing:-0.03em;text-align:left;padding:5px 20px">
												<center>												
												<img src="https://graph.facebook.com/100000722125766/picture?type=square" width="50" height="50" title="EricK Simões" alt="EricK Simões">
												<p style="font-size:18px">Erick Simões - Android(Java)</p>
												</center>
											</td>
											<td>
												<center>
												<img src="https://graph.facebook.com/100003081807509/picture?type=square" width="50" height="50" title="Ediaimo Borges" alt="Ediaimo Borges">
												<p style="font-size:18px"><strong>Ediaimo Borges - Laravel(PHP)</strong></p>
												</center>
											</td>
										</tr>
									</tbody>
								</table>
								
								<p>Abaixo as informações mais recentes sobre a sua evolução profissional na última semana.</p>
								<table border=1 cellspacing="0" cellpadding="0" style="border-collapse:collapse;width:540px">
									<tbody>
										<tr>
											<td style="font-size:14px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;background:#ffffff;color:#000000;font-weight:bold;vertical-align:baseline;letter-spacing:-0.03em;text-align:left;padding:5px 20px">
												<p style="font-weight:bold">Seu Nível</p>
												<p style="font-size:18px">{{$user->level}}</p>
											</td>
											<td style="font-size:14px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;background:#ffffff;color:#000000;vertical-align:baseline;letter-spacing:-0.03em;text-align:left;padding:5px 20px">
												<p style="font-weight:bold">Checkins</p>
												<p>{{count($user->checkins_since($since))}}</p>
											</td>
											<td style="font-size:14px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;background:#ffffff;color:#000000;vertical-align:baseline;letter-spacing:-0.03em;text-align:left;padding:5px 20px">
												<p style="font-weight:bold">Badges</p>
												<p>{{count($user->checkins_since($since))}}</p>
											</td>
											<td style="font-size:14px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;background:#ffffff;color:#000000;vertical-align:baseline;letter-spacing:-0.03em;text-align:left;padding:5px 20px">
												<p style="font-weight:bold">Seguidores</p>
												<p>{{count($user->followers)}}</p>
											</td>
											<td style="font-size:14px;font-family:'lucida grande',tahoma,verdana,arial,sans-serif;background:#ffffff;color:#000000;vertical-align:baseline;letter-spacing:-0.03em;text-align:left;padding:5px 20px">
												<p style="font-weight:bold">Amigos</p>
												@if($user->provider == 'facebook')
													<p>{{count($user->getFriends('facebook'))}}</p>
												@else
													<p>0</p>
												@endif
											</td>
										</tr>
									</tbody>
								</table>		
								<h3>Checkins da Semana</h3>
								<ul>
									@forelse($user->checkins_since($since) as $technology)
										<li>{{date('d/m/Y', strtotime($technology->pivot->checkin_at))}} - {{$technology->name}}</li>
									@empty
										<li><i>Sem checkins essa semana :(</i></li>
									@endforelse
								</ul>
								<p><strong><a href="http://www.myskills.com.br">Acesse agora e comece a semana fazendo novos checkins.</a></strong></p>
								<p><strong>Checkins</strong> - Através dos checkins você consegue registrar diariamente 
									as tecnologias que tem utilizado para desenvolver. 
									O seu nível é definido a partir do total de checkins feitos ao longo do tempo.
									Além disso eles servem para que você identifique as tecnologias utilizadas por outros
									desenvolvedores. Seja para trocar idéias ou para saber o que a comunidade tem utilizado
									recentemente.
								</p>
								<h3>Seus Badges</h3>
								<p>Esses são os seus badge atuais.</p>								
								@forelse ($user->activebadges as $badge)
									{{HTML::image('img/badges/'.$badge->image,  $badge->name, array('height'=>75, 'title' => $badge->name))}}
								@empty
									<p><i>Já cadastramos dezenas de badges e você ainda não escolheu nenhum?</i></p>
								@endforelse
								<h3>Novos Badges</h3> 
								<p>Fique de olho nos novos badges.</p>
								@forelse (Badge::since() as $new_badge)
									{{HTML::image('img/badges/'.$new_badge->image,  $new_badge->name, array('height'=>75, 'title' => $new_badge->name))}}
								@empty
									<p><i>Sem novos badges essa semana.</i></p>
								@endforelse
								<h3>Seus seguidores</h3>
								@forelse ($user->followers as $follower)
									{{HTML::image($follower->getImageUrl('large'),  $follower->name, array('width' => 50, 'height'=>50, 'title' => $follower->name))}}
								@empty
									<p><i>Sem seguidores ainda. Está na hora de começar a socializar.</i></p>								
								@endforelse
								@if($user->provider == 'facebook')
									<h3>Seus Amigos</h3>	
									@forelse ($user->getFriends('facebook') as $friend)
										{{HTML::image($friend->getImageUrl('large'),  $friend->name, array('width' => 50, 'height'=>50, 'title' => $friend->name))}}
									@empty
										<p><i>Sem amigos? Que triste. :(</i></p>
									@endforelse
								@endif
								<h3>Novos Usuários</h3>
								@forelse (User::users_since($since) as $new_user)
									{{HTML::image($new_user->getImageUrl('large'),  $new_user->name, array('width' => 50, 'height'=>50, 'title' => $new_user->name))}}
								@empty
									<p><i>Sem novos usuários essa semana. Que tal convidar alguns amigos?</i></p>
								@endforelse
							</td>
						</tr>
					</tbody>
				</table>				
			</td>
		</tr>
	</tbody>
</table>



