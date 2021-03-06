<?php

namespace Lychee\Locale;

final class Portuguese
{
	static public function code()
	{
		return 'pt';
	}

	static public function get_locale()
	{
		$locale = array(
			'USERNAME'		=> 'utilizador',
			'PASSWORD'		=> 'palavra-passe',
			'ENTER'			=> 'Entrar',
			'CANCEL'		=> 'Cancelar',
			'SIGN_IN'		=> 'Entrar',
			'CLOSE'			=> 'Fechar',

			'SETTINGS'			=> 'Definições',
			'USERS'				=> 'Utilizadores',
			'SHARING'			=> 'Partilha',
			'CHANGE_LOGIN'		=> 'Alterar Dados de Acesso',
			'CHANGE_SORTING'	=> 'Alterar Ordem',
			'SET_DROPBOX'		=> 'Definir Dropbox',
			'ABOUT_LYCHEE'		=> 'Sobre Lychee',
			'DIAGNOSTICS'		=> 'Diagnóstico',
			'LOGS'				=> 'Mostrar Logs',
			'SIGN_OUT'			=> 'Sair',
			'UPDATE_AVAILABLE'	=> 'Actualização disponível!',
			'DEFAULT_LICENSE'	=> 'Licença para novas imagens:',
			'SET_LICENSE'		=> 'Definir Licença',
			'SET_OVERLAY_TYPE'	=> 'Set Sobreposição',

			'SMART_ALBUMS'		=> 'Albuns inteligentes',
			'SHARED_ALBUMS'		=> 'Albuns partilhados',
			'ALBUMS'			=> 'Albuns',
			'PHOTOS'			=> 'Fotografias',

			'RENAME'			=> 'Renomear',
			'RENAME_ALL'		=> 'Renomear Todos',
			'MERGE'				=> 'Unir',
			'MERGE_ALL'			=> 'Unir Todos',
			'MAKE_PUBLIC'		=> 'Tornar Público',
			'SHARE_ALBUM'		=> 'Partilhar Album',
			'SHARE_PHOTO'		=> 'Partilhar Fotografia',
			'DOWNLOAD_ALBUM'	=> 'Descarregar Album',
			'ABOUT_ALBUM'		=> 'Sobre o Album',
			'DELETE_ALBUM'		=> 'Apagar Album',
			'FULLSCREEN_ENTER'	=> 'Ecrã Inteiro',
			'FULLSCREEN_EXIT'	=> 'Sair de Ecrã Inteiro',

			'DELETE_ALBUM_QUESTION'			=> 'Apagar Album e Fotografias',
			'KEEP_ALBUM'					=> 'Cancelar',
			'DELETE_ALBUM_CONFIRMATION_1'	=> 'Tem a certeza que quer apagar o album',
			'DELETE_ALBUM_CONFIRMATION_2'	=> 'e todas as fotografias nele contidas? Esta ação é irreversível!',

			'DELETE_ALBUMS_QUESTION'		=> 'Apagar Albuns e Fotografias',
			'KEEP_ALBUMS'					=> 'Cancelar',
			'DELETE_ALBUMS_CONFIRMATION_1'	=> 'Tem a certeza que quer apagar o(s)',
			'DELETE_ALBUMS_CONFIRMATION_2'	=> 'albuns selecionados e todas as fotografias neles contidas? Esta ação é irreversível',

			'DELETE_UNSORTED_CONFIRM'		=> 'Tem a certeza que quer apagar todas as fotografias por organizar?<br>Esta ação é irreversível!',
			'CLEAR_UNSORTED'				=> 'Apagar Tudo',
			'KEEP_UNSORTED'					=> 'Cancelar',

			'EDIT_SHARING'					=> 'Editar Partilha',
			'MAKE_PRIVATE'					=> 'Tornar Privado',

			'CLOSE_ALBUM'					=> 'Fechar Album',
			'CLOSE_PHOTO'					=> 'Fechar Fotografia',

			'ADD'							=> 'Adicionar',
			'MOVE'							=> 'Mover',
			'MOVE_ALL'						=> 'Mover Tudo',
			'DUPLICATE'						=> 'Duplicar',
			'DUPLICATE_ALL'					=> 'Duplicar Tudo',
			'COPY_TO'						=> 'Copiar...',
			'COPY_ALL_TO'					=> 'Copiar Tudo...',
			'DELETE'						=> 'Apagar',
			'DELETE_ALL'					=> 'Apagar Tudo',
			'DOWNLOAD'						=> 'Descarregar',
			'DOWNLOAD_MEDIUM'				=> 'Descarregar tamanho médio',
			'DOWNLOAD_SMALL'				=> 'Descarregar tamanho pequeno',
			'UPLOAD_PHOTO'					=> 'Enviar Fotografia',
			'IMPORT_LINK'					=> 'Importar de Hiperligação',
			'IMPORT_DROPBOX'				=> 'Importar de Dropbox',
			'IMPORT_SERVER'					=> 'Importar de Servidor',
			'NEW_ALBUM'						=> 'Novo Album',

			'TITLE_NEW_ALBUM'			=> 'Introduza um título para o novo album:',
			'UNTITLED'					=> 'Sem Título',
			'UNSORTED'					=> 'Por Organizar',
			'STARRED'					=> 'Favoritos',
			'RECENT'					=> 'Recentes',
			'PUBLIC'					=> 'Público',
			'NUM_PHOTOS'				=> 'Fotografias',

			'CREATE_ALBUM'				=> 'Criar Album',

			'STAR_PHOTO'				=> 'Adicionar Fotografia aos Favoritos',
			'STAR'						=> 'Adicionar aos Favoritos',
			'STAR_ALL'					=> 'Adicionar Tudo aos Favoritos',
			'TAGS'						=> 'Etiquetas',
			'TAGS_ALL'					=> 'Etiquetas',
			'UNSTAR_PHOTO'				=> 'Remover Fotografia dos Favoritos',

			'FULL_PHOTO'				=> 'Fotografia Completa',
			'ABOUT_PHOTO'				=> 'Sobre a Fotograia',
			'DIRECT_LINK'				=> 'Hiperligação Directa',

			'ALBUM_ABOUT'				=> 'Sobre',
			'ALBUM_BASICS'				=> 'Geral',
			'ALBUM_TITLE'				=> 'Título',
			'ALBUM_NEW_TITLE'			=> 'Introduza um novo título para este album:',
			'ALBUMS_NEW_TITLE_1'		=> 'Introduza um título para os',
			'ALBUMS_NEW_TITLE_2'		=> 'albums selecionados:',
			'ALBUM_SET_TITLE'			=> 'Definir Título',
			'ALBUM_DESCRIPTION'			=> 'Descrição',
			'ALBUM_NEW_DESCRIPTION'		=> 'Introduza uma nova descrição para este album:',
			'ALBUM_SET_DESCRIPTION'		=> 'Definir Descrição',
			'ALBUM_ALBUM'				=> 'Album',
			'ALBUM_CREATED'				=> 'Criado',
			'ALBUM_IMAGES'				=> 'Fotografias',
			'ALBUM_SHARING'				=> 'Partilhar',
			'ALBUM_SHR_YES'				=> 'SIM',
			'ALBUM_SHR_NO'				=> 'Não',
			'ALBUM_PUBLIC'				=> 'Público',
			'ALBUM_HIDDEN'				=> 'Escondido',
			'ALBUM_HIDDEN_EXPL'			=> 'Apenas pessoas com a hiperligação directa podem ver este album.',
			'ALBUM_DOWNLOADABLE'		=> 'Descarregável',
			'ALBUM_DOWNLOADABLE_EXPL'	=> 'Permitir que convidados possam descarregar este album.',
			'ALBUM_PASSWORD'			=> 'Palavra-passe',
			'ALBUM_PASSWORD_PROT'		=> 'Protegido por palavra-passe',
			'ALBUM_PASSWORD_PROT_EXPL'	=> 'É necessário uma palavra-passe para aceder ao album.',
			'ALBUM_PASSWORD_REQUIRED'	=> 'Este album está protegido. Introduza a palavra-passe abaixo para visualizar as fotografias:',
			'ALBUM_MERGE_1'				=> 'Tem a certeza que deseja unir o album',
			'ALBUM_MERGE_2'				=> 'com o album',
			'ALBUMS_MERGE'				=> 'Tem a certeza que deseja unir todos os albuns selecionados com o album',
			'MERGE_ALBUM'				=> 'Unir Albums',
			'DONT_MERGE'				=> "Não Unir",
			'ALBUM_MOVE_1'				=> 'Tem a certeza que deseja mover o album',
			'ALBUM_MOVE_2'				=> 'para o album',
			'ALBUMS_MOVE'				=> 'Tem a certeza que deseja mover todos os albuns selecionados para o album',
			'MOVE_ALBUMS'				=> 'Mover Albuns',
			'NOT_MOVE_ALBUMS'			=> 'Não Mover',
			'ROOT'						=> 'Raíz',
			'ALBUM_REUSE'				=> "Reutilização",
			'ALBUM_LICENSE'				=> 'Licença',
			'ALBUM_SET_LICENSE'			=> 'Definir Licença',
			'ALBUM_LICENSE_HELP'		=> 'Precisa de ajuda a escolher?',
			'ALBUM_LICENSE_NONE'		=> 'Nenhuma',
			'ALBUM_RESERVED'			=> 'Todos os Direitos Reservados',

			'PHOTO_ABOUT'				=> 'Sobre',
			'PHOTO_BASICS'				=> 'Geral',
			'PHOTO_TITLE'				=> 'Título',
			'PHOTO_NEW_TITLE'			=> 'Introduza um novo título para esta fotografia:',
			'PHOTO_SET_TITLE'			=> 'Definir Título',
			'PHOTO_UPLOADED'			=> 'Enviado',
			'PHOTO_DESCRIPTION'			=> 'Descrição',
			'PHOTO_NEW_DESCRIPTION'		=> 'Introduza uma nova descrição para esta fotografia:',
			'PHOTO_SET_DESCRIPTION'		=> 'Definir Descrição',
			'PHOTO_NEW_LICENSE'			=> 'Adicionar uma Licença',
			'PHOTO_SET_LICENSE'			=> 'Definir Licença',
			'PHOTO_LICENSE'				=> 'Licença',
			'PHOTO_REUSE'				=> 'Reutilização',
			'PHOTO_LICENSE_NONE'		=> 'Nenhuma',
			'PHOTO_RESERVED'			=> 'Todos os Direitos Reservados',
			'PHOTO_IMAGE'				=> 'Imagem',
			'PHOTO_SIZE'				=> 'Tamanho',
			'PHOTO_FORMAT'				=> 'Formato',
			'PHOTO_RESOLUTION'			=> 'Resolução',
			'PHOTO_TAGS'				=> 'Etiquetas',
			'PHOTO_NOTAGS'				=> 'Sem Etiquetas',
			'PHOTO_NEW_TAGS'			=> 'Introduza as suas etiquetas para esta fotografia. Pode adicionar várias etiquetas separadas por vírgula:',
			'PHOTO_NEW_TAGS_1'			=> 'Introduza as suas etiquetas para as',
			'PHOTO_NEW_TAGS_2'			=> 'fotografias selecionadas. Etiquetas existentes serão substituídas. Pode adicionar várias etiquetas separadas por vírgula:',
			'PHOTO_SET_TAGS'			=> 'Definir Etiquetas',
			'PHOTO_CAMERA'				=> 'Câmara',
			'PHOTO_CAPTURED'			=> 'Data',
			'PHOTO_MAKE'				=> 'Marca',
			'PHOTO_TYPE'				=> 'Tipo/Modelo',
			'PHOTO_SHUTTER'				=> 'Velocidade',
			'PHOTO_APERTURE'			=> 'Abertura',
			'PHOTO_FOCAL'				=> 'Distância Focal',
			'PHOTO_ISO'					=> 'ISO',
			'PHOTO_SHARING'				=> 'Partilhar',
			'PHOTO_SHR_PLUBLIC'			=> 'Público',
			'PHOTO_SHR_ALB'				=> 'Sim (Album)',
			'PHOTO_SHR_PHT'				=> 'Sim (Fotografia)',
			'PHOTO_SHR_NO'				=> 'Não',
			'PHOTO_DELETE'				=> 'Apagar Fotografia',
			'PHOTO_KEEP'				=> 'Cancelar',
			'PHOTO_DELETE_1'			=> 'Tem a certeza que deseja apagar a fotografia',
			'PHOTO_DELETE_2'			=> '? Esta ação é irreversível!',
			'PHOTO_DELETE_ALL_1'		=> 'Tem a certeza que deseja apagar as',
			'PHOTO_DELETE_ALL_2'		=> 'fotografias selecionadas? Esta ação é irreversível!',
			'PHOTO_NEW_TITLE'			=> 'Introduza um novo título para esta fotografia:',
			'PHOTOS_NEW_TITLE_1'		=> 'Introduza um título para as',
			'PHOTOS_NEW_TITLE_2'		=> 'fotografias selecionadas:',
			'PHOTO_MAKE_PRIVATE_ALBUM'	=> 'Esta fotografia encontra-se num album público. Para alternar entre pública ou privada, edite a visibilidade do album.',
			'PHOTO_SHOW_ALBUM'			=> 'Mostrar Album',

			'LOADING'					=> 'A carregar',
			'ERROR'						=> 'Erro',
			'ERROR_TEXT'				=> 'Oops, parece que algo correu mal. Por favor actualize a página e tente de novo!',
			'ERROR_DB_1'				=> 'Não foi possível estabelecer ligação à base de dados porque o acesso foi negado. Verifique se o servidor, utilizador e palavra-passe estão corretos e garanta que tem permissão de acesso.',
			'ERROR_DB_2'				=> 'Não foi possível estabelecer ligação à base de dados porque o acesso foi negado. Verifique se o servidor, utilizador e palavra-passe estão corretos garanta que o utilizador tem permissões para adicionar e modificar o conteúdo da base de dados.',
			'ERROR_CONFIG_FILE'			=> "Não foi possível guardar esta configuração. Acesso negado em <b>'data/'</b>. Por favor defina permissões de leitura, escrita e execução em <b>'data/'</b> e <b>'uploads/'</b>. Veja o ficheiro README para mais informações.",
			'ERROR_UNKNOWN'				=> 'Ocorreu um erro inesperado. Por favor tente de novo e confirme que está tudo correcto com a sua ligação e servidor. Veja o ficheiro README para mais informações.',
			'ERROR_LOGIN'				=> 'Não foi possível guardar estes Dados de Acesso. Por favor tente com outro utilizador e palavra-passe!',
			'SUCCESS'					=> 'OK',
			'RETRY'						=> 'Voltar a Tentar',

			'SETTINGS_SUCCESS_LOGIN'		=> 'Dados de Acesso atualizados.',
			'SETTINGS_SUCCESS_SORT'			=> 'Ordem atualizada.',
			'SETTINGS_SUCCESS_DROPBOX'		=> 'Chave Dropbox atualizada.',
			'SETTINGS_SUCCESS_LANG'			=> 'Língua atualizada',
			'SETTINGS_SUCCESS_LAYOUT'		=> 'Layout atualizado',
			'SETTINGS_SUCCESS_IMAGE_OVERLAY'=> 'Sobreposição EXIF atualizada',
			'SETTINGS_SUCCESS_PUBLIC_SEARCH'=> 'Pesquisa pública atualizada',
			'SETTINGS_SUCCESS_LICENSE'		=> 'Licença por padrão atualizada',

			'DB_INFO_TITLE'				=> 'Introduza os seus dados de ligação à base de dados:',
			'DB_INFO_HOST'				=> 'Servidor (opcional)',
			'DB_INFO_USER'				=> 'Utilizador',
			'DB_INFO_PASSWORD'			=> 'Palavra-passe',
			'DB_INFO_TEXT'				=> 'Lychee vai criar a sua própria base de dados. Se preferir, pode introduzir o nome de uma base de dados existente:',
			'DB_NAME'					=> 'Base de Dados (opcional)',
			'DB_PREFIX'					=> 'Prefixo de Tabela (opcional)',
			'DB_CONNECT'				=> 'Ligar',

			'LOGIN_TITLE'				=> 'Introduza um utilizador e palavra-passe para a sua instalação:',
			'LOGIN_USERNAME'			=> 'Novo Utilizador',
			'LOGIN_PASSWORD'			=> 'Nova Palavra-Passe',
			'LOGIN_CREATE'				=> 'Criar',

			'PASSWORD_TITLE'			=> 'Introduza a sua palavra-passe atual:',
			'USERNAME_CURRENT'			=> 'Utilizador Atual',
			'PASSWORD_CURRENT'			=> 'Palavra-Passe Atual',
			'PASSWORD_TEXT'				=> 'O seu utilizador e palavra-passe serão alterados para:',
			'PASSWORD_CHANGE'			=> 'Alterar Dados de Acesso',


			'EDIT_SHARING_TITLE'		=> 'Editar Partilha',
			'EDIT_SHARING_TEXT'			=> 'As propriedades de partilha deste album serão alteradas para as seguintes:',
			'SHARE_ALBUM_TEXT'			=> 'Este album será partilhado com as seguintes propriedades:',

			'SORT_ALBUM_BY_1'			=> 'Ordenar albuns por',
			'SORT_ALBUM_BY_2'			=> 'em ordem',
			'SORT_ALBUM_BY_3'			=> '',

			'SORT_ALBUM_SELECT_1'		=> 'Data de Criação',
			'SORT_ALBUM_SELECT_2'		=> 'Título',
			'SORT_ALBUM_SELECT_3'		=> 'Descrição',
			'SORT_ALBUM_SELECT_4'		=> 'Públicos',
			'SORT_ALBUM_SELECT_5'		=> 'Fotografias Mais Recentes',
			'SORT_ALBUM_SELECT_6'		=> 'Fotografias Mais Antigas',

			'SORT_PHOTO_BY_1'			=> 'Ordenar fotografias por',
			'SORT_PHOTO_BY_2'			=> 'em ordem',
			'SORT_PHOTO_BY_3'			=> '',

			'SORT_PHOTO_SELECT_1'		=> 'Data de Envio',
			'SORT_PHOTO_SELECT_2'		=> 'Data da Fotografia',
			'SORT_PHOTO_SELECT_3'		=> 'Título',
			'SORT_PHOTO_SELECT_4'		=> 'Descrição',
			'SORT_PHOTO_SELECT_5'		=> 'Públicas',
			'SORT_PHOTO_SELECT_6'		=> 'Favoritas',
			'SORT_PHOTO_SELECT_7'		=> 'Formato da Fotografia',

			'SORT_ASCENDING'			=> 'Ascendente',
			'SORT_DESCENDING'			=> 'Descendente',
			'SORT_CHANGE'				=> 'Alterar Ordem',

			'DROPBOX_TITLE'				=> 'Definir Chave Dropbox',
			'DROPBOX_TEXT'				=> "Para poder importar fotografias da sua Dropbox, precisa de uma chave válida que pode obter no <a href='https://www.dropbox.com/developers/apps/create'>site deles</a>. Crie uma chave pessoal e introduza-a abaixo:",

			'LANG_TEXT'					=> 'Definir a língua do Lychee para:',
			'LANG_TITLE'				=> 'Alterar Língua',

			'LAYOUT_TYPE'				=> 'Layout das fotografias:',
			'LAYOUT_SQUARES'			=> 'Quadrados',
			'LAYOUT_JUSTIFIED'			=> 'Original, justificado',
			'LAYOUT_UNJUSTIFIED'		=> 'Original, não justificado',
			'SET_LAYOUT'				=> 'Alterar Layout',
			'PUBLIC_SEARCH_TEXT'		=> 'Permitir pesquia pública:',

			'IMAGE_OVERLAY_TEXT'		=> 'Mostrar informação sobreposta na imagem por padrão:',

			'OVERLAY_TYPE'				=> 'Informação a mostrar:',
			'OVERLAY_EXIF'				=> 'Dados EXIF da fotografia',
			'OVERLAY_DESCRIPTION'		=> 'Descrição da fotografia',
			'OVERLAY_DATE'				=> 'Data da fotografia',

			'VIEW_NO_RESULT'			=> 'Sem resultados',
			'VIEW_NO_PUBLIC_ALBUMS'		=> 'Sem albuns públicos',
			'VIEW_NO_CONFIGURATION'		=> 'Sem configuração',
			'VIEW_PHOTO_NOT_FOUND'		=> 'Fotografia não encontrada',

			'NO_TAGS'					=> 'Sem Etiquetas',

			'UPLOAD_MANAGE_NEW_PHOTOS'	=> 'Pode gerir a(s) sua(s) nova(s) fotografia(s).',
			'UPLOAD_COMPLETE'			=> 'Envio terminado',
			'UPLOAD_COMPLETE_FAILED'	=> 'O envio de uma ou mais fotografias falhou.',
			'UPLOAD_IMPORTING'			=> 'A importar',
			'UPLOAD_IMPORTING_URL'		=> 'A importar URL',
			'UPLOAD_UPLOADING'			=> 'A enviar',
			'UPLOAD_FINISHED'			=> 'Terminador',
			'UPLOAD_PROCESSING'			=> 'A processar',
			'UPLOAD_FAILED'				=> 'Falhou',
			'UPLOAD_FAILED_ERROR'		=> 'Envio falhou. O servidor retornou um erro!',
			'UPLOAD_FAILED_WARNING'		=> 'Envio falhou. O servidor retornou um aviso!',
			'UPLOAD_SKIPPED'			=> 'Ignorado',
			'UPLOAD_ERROR_CONSOLE'		=> 'Por favor veja a consola do seu navegador para mais detalhes.',
			'UPLOAD_UNKNOWN'			=> 'O servidor retornou uma resposta desconhecida. Por favor veja a consola do seu navegador para mais detalhes.',
			'UPLOAD_ERROR_UNKNOWN'		=> 'Envio falhou. O servidor retornou um desconhecido!',
			'UPLOAD_IN_PROGRESS'		=> 'O Lychee está a enviar!',
			'UPLOAD_IMPORT_WARN_ERR'	=> 'A importação terminou, mas foram retornados avisos ou erros. Por favor confirme nos logs (Definições -> Mostrar Logs) para mais detalhes.',
			'UPLOAD_IMPORT_COMPLETE'	=> 'Importação terminada',
			'UPLOAD_IMPORT_INSTR'		=> 'Por favor introuza a hiperligação direta para a fotografia a importar:',
			'UPLOAD_IMPORT'				=> 'Importar',
			'UPLOAD_IMPORT_SERVER'		=> 'A importar do servidor',
			'UPLOAD_IMPORT_SERVER_FOLD'	=> 'Pasta vazia ou sem ficheiros com permissão de leitura para processar. Por favor confirme nos logs (Definições -> Mostrar Logs) para mais detalhes.',
			'UPLOAD_IMPORT_SERVER_INSTR'=> 'Esta ação irá importar todas as fotorafias, pastas e sub-pastas localizadas na seguinte pasta. Os <b>ficheiros originals serão apagados</b> quando após importados sempre que possível.',
			'UPLOAD_ABSOLUTE_PATH'		=> 'Caminho absoluto para a pasta',
			'UPLOAD_IMPORT_SERVER_EMPT'	=> 'Não foi possível importar porque a pasta estava vazia!',

			'ABOUT_SUBTITLE'			=> 'Gestor de fotografias self-hosted feito como deve ser',
			'ABOUT_DESCRIPTION'			=> 'é um gestor de fotografias grátis, que corre no seu servidor ou alojamento web. Instalado em segundos. Envie, gira e partilhe fotografias como se fosse uma aplicação nativa. Lychee tem tudo o que precisa e todas as suas fotografias são guardadas com segurança.'
		);

		return $locale;
	}
}
