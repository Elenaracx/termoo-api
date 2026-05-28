// Executa esta linha
<?php

// Executa esta linha
namespace App\Http\Controllers;

// Executa esta linha
use Illuminate\Http\Request;
// Executa esta linha
use Illuminate\Support\Facades\Cache;
// Executa esta linha
use Illuminate\Support\Str;
// Define uma classe
class JogoController extends Controller
// Executa esta linha
{
    // Define ou atualiza uma variável
    private $palavras = [
      // Executa esta linha
      'sagaz', 'âmago', 'termo', 'negro', 'êxito', 'mexer', 'nobre', 'senso', 'ética', 'afeto', 'algoz', 'fazer', 'plena', 'tênue', 'assim', 'sobre',
        // Executa esta linha
        'mútua', 'aquém', 'poder', 'seção', 'vigor', 'porém', 'sutil', 'fosse', 'cerne', 'ideia', 'sanar', 'audaz', 'moral', 'inato', 'quiçá', 'muito',
        // Executa esta linha
        'justo', 'desde', 'honra', 'sonho', 'torpe', 'amigo', 'razão', 'égide', 'ícone', 'etnia', 'fútil', 'anexo', 'dengo', 'tange', 'haver', 'lapso',
        // Executa esta linha
        'então', 'tempo', 'expor', 'seara', 'boçal', 'saber', 'hábil', 'graça', 'mútuo', 'xibiu', 'casal', 'óbice', 'ávido', 'dizer', 'ardil', 'estar',
        // Executa esta linha
        'pesar', 'dever', 'causa', 'tenaz', 'ainda', 'sendo', 'temor', 'crivo', 'brado', 'pária', 'coser', 'ápice', 'genro', 'comum', 'posse', 'prole',
        // Executa esta linha
        'assaz', 'corja', 'ânimo', 'fugaz', 'ceder', 'pauta', 'censo', 'detém', 'culto', 'ânsia', 'atroz', 'digno', 'mundo', 'forte', 'mesmo', 'vulgo',
        // Executa esta linha
        'vício', 'saúde', 'gleba', 'criar', 'todos', 'cozer', 'revés', 'jeito', 'pudor', 'dogma', 'valha', 'denso', 'neném', 'louco', 'limbo', 'ordem',
        // Executa esta linha
        'atrás', 'regra', 'pedir', 'homem', 'feliz', 'ajuda', 'clava', 'usura', 'mercê', 'impor', 'banal', 'coisa', 'falso', 'juízo', 'round', 'legal',
        // Executa esta linha
        'forma', 'falar', 'sábio', 'certo', 'prosa', 'servo', 'tenro', 'presa', 'pífio', 'posso', 'desse', 'herói', 'cunho', 'devir', 'fácil', 'viril',
        // Executa esta linha
        'ontem', 'vendo', 'valor', 'visar', 'linda', 'manso', 'sério', 'ébrio', 'guisa', 'mágoa', 'acaso', 'meiga', 'ímpio', 'puder', 'fluir', 'afago',
        // Executa esta linha
        'lugar', 'reaça', 'abrir', 'temer', 'platô', 'garbo', 'praxe', 'união', 'gerar', 'burro', 'obter', 'matiz', 'óbvio', 'cisma', 'bruma', 'vênia',
        // Executa esta linha
        'afins', 'êxodo', 'crise', 'pleno', 'álibi', 'ritmo', 'tédio', 'fluxo', 'morte', 'levar', 'senil', 'olhar', 'casta', 'havia', 'tomar', 'enfim',
        // Executa esta linha
        'visão', 'ouvir', 'gênio', 'parvo', 'prumo', 'cabal', 'brega', 'parco', 'reles', 'falta', 'calma', 'vital', 'outro', 'tecer', 'bravo', 'favor',
        // Executa esta linha
        'pulha', 'terra', 'reter', 'vivaz', 'viver', 'ameno', 'sábia', 'força', 'único', 'tendo', 'laico', 'passo', 'nicho', 'valia', 'achar', 'grato',
        // Executa esta linha
        'nossa', 'carma', 'rever', 'papel', 'noção', 'ranço', 'pobre', 'possa', 'rogar', 'dúbio', 'noite', 'fardo', 'ativo', 'façam', 'prime', 'farsa',
        // Executa esta linha
        'coeso', 'épico', 'fator', 'anelo', 'claro', 'leigo', 'líder', 'sesta', 'selar', 'óbito', 'vazio', 'ciúme', 'cisão', 'cesta', 'sonso', 'ficar',
        // Executa esta linha
        'citar', 'deter', 'sinto', 'atuar', 'velho', 'gente', 'haste', 'fonte', 'adiar', 'ponto', 'tende', 'humor', 'revel', 'ideal', 'sulco', 'senão',
        // Executa esta linha
        'árduo', 'labor', 'remir', 'terno', 'igual', 'marco', 'hiato', 'feixe', 'exato', 'capaz', 'amplo', 'débil', 'tanto', 'lavra', 'relva', 'vemos',
        // Executa esta linha
        'ciclo', 'cauda', 'tenra', 'inata', 'jovem', 'raiva', 'chuva', 'varão', 'ótica', 'gesto', 'caçar', 'ambos', 'pouco', 'toada', 'velar', 'sonsa',
        // Executa esta linha
        'apoio', 'coçar', 'série', 'vácuo', 'imune', 'xeque', 'algum', 'farão', 'feito', 'horda', 'vimos', 'carro', 'fusão', 'entre', 'advém', 'sorte',
        // Executa esta linha
        'leito', 'coesa', 'probo', 'minha', 'trama', 'cruel', 'sente', 'doido', 'anuir', 'lazer', 'frase', 'brisa', 'ímpar', 'verso', 'chata', 'blasé',
        // Executa esta linha
        'rigor', 'massa', 'pegar', 'torço', 'maior', 'prece', 'botar', 'áurea', 'seita', 'dorso', 'saiba', 'agora', 'signo', 'furor', 'fauna', 'moção',
        // Executa esta linha
        'livro', 'plano', 'liame', 'vetor', 'comer', 'ocaso', 'senda', 'covil', 'preso', 'credo', 'casto', 'flora', 'morar', 'praia', 'pecha', 'nunca',
        // Executa esta linha
        'faina', 'aliás', 'dócil', 'adeus', 'houve', 'peste', 'ardor', 'mudar', 'árido', 'setor', 'parte', 'manha', 'ambas', 'peixe', 'risco', 'antro',
        // Executa esta linha
        'rezar', 'visse', 'pajem', 'estão', 'grupo', 'junto', 'avaro', 'vulto', 'vírus', 'salvo', 'meses', 'campo', 'ótimo', 'índio', 'saída', 'beata',
        // Executa esta linha
        'breve', 'vasto', 'antes', 'aceso', 'morro', 'conta', 'sinal', 'verbo', 'andar', 'anais', 'lenda', 'reger', 'oxalá', 'áureo', 'banzo', 'prado',
        // Executa esta linha
        'fugir', 'acima', 'opção', 'serão', 'festa', 'vilão', 'chulo', 'rapaz', 'nação', 'texto', 'segue', 'leite', 'motim', 'birra', 'fruir', 'tirar',
        // Executa esta linha
        'treta', 'parar', 'brava', 'bônus', 'fitar', 'átrio', 'ídolo', 'puxar', 'jazia', 'filho', 'turba', 'átomo', 'alude', 'tosco', 'gerir', 'reino',
        // Executa esta linha
        'tenso', 'prova', 'prazo', 'traga', 'norma', 'manhã', 'exame', 'época', 'voraz', 'corpo', 'acesa', 'cheio', 'sarça', 'ligar', 'preto', 'nosso',
        // Executa esta linha
        'malta', 'bando', 'aonde', 'magia', 'arcar', 'quase', 'cópia', 'venal', 'fatos', 'logro', 'longe', 'sinhá', 'avião', 'afora', 'psico', 'anciã',
        // Executa esta linha
        'fatal', 'dessa', 'certa', 'praga', 'sexta', 'quota', 'nível', 'fixar', 'oásis', 'mente', 'glosa', 'messe', 'nódoa', 'apelo', 'lidar', 'apego',
        // Executa esta linha
        'pompa', 'perda', 'verve', 'parca', 'tocar', 'alado', 'coito', 'jirau', 'caixa', 'livre', 'fraco', 'sumir', 'porta', 'tinha', 'vezes', 'grave',
        // Executa esta linha
        'soldo', 'firme', 'lindo', 'bater', 'cânon', 'opaco', 'solto', 'irmão', 'besta', 'faixa', 'astro', 'salve', 'sabia', 'atual', 'elite', 'turva',
        // Executa esta linha
        'trupe', 'virão', 'doído', 'supra', 'navio', 'fenda', 'deixa', 'cioso', 'junco', 'grata', 'alçar', 'pardo', 'autor', 'curso', 'pique', 'chato',
        // Executa esta linha
        'bioma', 'parva', 'exijo', 'douto', 'bicho', 'aluno', 'macio', 'desta', 'pagão', 'viria', 'ético', 'reses', 'menos', 'cousa', 'caber', 'calda',
        // Executa esta linha
        'posto', 'ficha', 'rádio', 'vídeo', 'culpa', 'abuso', 'locus', 'lápis', 'supor', 'zelar', 'gosto', 'judeu', 'super', 'suave', 'verba', 'calão',
        // Executa esta linha
        'advir', 'agudo', 'drops', 'extra', 'baixo', 'júlia', 'molho', 'retém', 'torso', 'privê', 'piada', 'facho', 'sítio', 'ruína', 'peito', 'vinha',
        // Executa esta linha
        'vosso', 'turma', 'ígneo', 'passa', 'traço', 'pódio', 'asilo', 'ávida', 'estio', 'combo', 'pilar', 'light', 'órfão', 'turvo', 'chama', 'mosto',
        // Executa esta linha
        'páreo', 'museu', 'ações', 'louça', 'refém', 'amena', 'poeta', 'lasso', 'acolá', 'pisar', 'forem', 'brabo', 'mesma', 'local', 'medir', 'drama',
        // Executa esta linha
        'optar', 'busca', 'meigo', 'teste', 'ereto', 'finda', 'metiê', 'poema', 'clima', 'tento', 'aviso', 'cútis', 'folga', 'autos', 'geral', 'coral',
        // Executa esta linha
        'surja', 'facto', 'cocho', 'hobby', 'rumor', 'amiga', 'rouca', 'feroz', 'tacha', 'paira', 'calmo', 'pedra', 'idoso', 'cetro', 'rubro', 'boato',
        // Executa esta linha
        'pacto', 'volta', 'urgia', 'açude', 'golpe', 'móvel', 'lição', 'feudo', 'crime', 'monge', 'ecoar', 'ateia', 'corso', 'manga', 'daqui', 'ébano',
        // Executa esta linha
        'riste', 'clean', 'artur', 'carta', 'casar', 'ponha', 'tetra', 'natal', 'falha', 'bença', 'monte', 'saldo', 'aroma', 'verde', 'conto', 'escol',
        // Executa esta linha
        'cacho', 'vetar', 'itens', 'briga', 'hoste', 'vigia', 'tarde', 'grama', 'tribo', 'plumo', 'fórum', 'mangá', 'pasmo', 'ornar', 'letal', 'amada',
        // Executa esta linha
        'fazia', 'troça', 'vento', 'pedro', 'súcia', 'sósia', 'chefe', 'única', 'civil', 'rival', 'fruto', 'úteis', 'nuvem', 'órgão', 'pinho', 'tchau',
        // Executa esta linha
        'plaga', 'roupa', 'jogar', 'venha', 'sarau', 'vazão', 'areia', 'jejum', 'átimo', 'plebe', 'penta', 'berro', 'virar', 'arado', 'nesse', 'swing',
        // Executa esta linha
        'cargo', 'cover', 'seixo', 'fosso', 'perto', 'mídia', 'catre', 'lesse', 'macro', 'stand', 'magna', 'gíria', 'rocha', 'axila', 'tutor', 'légua',
        // Executa esta linha
        'beijo', 'varoa', 'bruto', 'todas', 'tiver', 'tição', 'finjo', 'farta', 'inter', 'troca', 'calor', 'renda', 'bruta', 'pomar', 'assar', 'tenha',
        // Executa esta linha
        'tenho', 'traje', 'gabar', 'deste', 'close', 'santo', 'arfar', 'xucro', 'vadio', 'dança', 'trato', 'surto', 'estro', 'porte', 'amado', 'nessa',
        // Executa esta linha
        'âmbar', 'guria', 'verão', 'perco', 'silvo', 'logos', 'rural', 'viram', 'odiar', 'feita', 'chula', 'mamãe', 'ágape', 'vista', 'aviar', 'cenho',
        // Executa esta linha
        'depor', 'laudo', 'nesta', 'canto', 'marca', 'negar', 'vedar', 'etapa', 'bazar', 'fossa', 'bolsa', 'grota', 'salmo', 'cerca', 'pavor', 'canso',
        // Executa esta linha
        'minar', 'densa', 'cheia', 'cifra', 'recém', 'coroa', 'irado', 'urdir', 'régio', 'clero', 'visto', 'quais', 'cinto', 'vagar', 'letra', 'ferpa',
        // Executa esta linha
        'burra', 'horto', 'sofia', 'ruído', 'jazer', 'invés', 'esgar', 'bucho', 'largo', 'folha', 'molde', 'proto', 'segar', 'símio', 'sótão', 'lesão',
        // Executa esta linha
        'paiol', 'final', 'pugna', 'úbere', 'trago', 'fundo', 'velha', 'penso', 'lesto', 'farol', 'morfo', 'queda', 'narco', 'álamo', 'vasta', 'ufano',
        // Executa esta linha
        'ardis', 'pasma', 'olhos', 'linha', 'ceita', 'troço', 'podar', 'apear', 'piche', 'deram', 'folia', 'preço', 'áudio', 'pólis', 'úmido', 'bulir',
        // Executa esta linha
        'viger', 'troco', 'frota', 'outra', 'mocho', 'neste', 'peita', 'disso', 'chave', 'monta', 'ileso', 'cosmo', 'matar', 'resto', 'seiva', 'manto',
        // Executa esta linha
        'chaga', 'redor', 'falsa', 'barro', 'misto', 'retro', 'mover', 'bolso', 'sacar', 'limpo', 'vazia', 'cível', 'lábia', 'bedel', 'campa', 'louca',
        // Executa esta linha
        'nariz', 'veloz', 'barão', 'nácar', 'louro', 'samba', 'logia', 'sabor', 'justa', 'toque', 'mimar', 'lutar', 'álbum', 'dados', 'banto', 'lucro',
        // Executa esta linha
        'macho', 'gemer', 'zumbi', 'axial', 'longo', 'coevo', 'porca', 'punha', 'pagar', 'arroz', 'rente', 'diabo', 'enjoo', 'calça', 'subir', 'salva',
        // Executa esta linha
        'farto', 'urgir', 'findo', 'lousa', 'xampu', 'calvo', 'venho', 'valer', 'baixa', 'pluma', 'focar', 'ousar', 'fátuo', 'sabiá', 'bruxa', 'sexto',
        // Executa esta linha
        'hífen', 'firma', 'repor', 'sigla', 'pular', 'torna', 'forro', 'lento', 'cardo', 'solta', 'choça', 'corte', 'bugre', 'gueto', 'feira', 'reler',
        // Executa esta linha
        'voilà', 'custo', 'fugiu', 'tênis', 'corar', 'fazes', 'vário', 'mania', 'nesga', 'sadio', 'demão', 'canil', 'rácio', 'ferir', 'versa', 'modal',
        // Executa esta linha
        'harém', 'sócio', 'míope', 'puído', 'sugar', 'digna', 'ceifa', 'tumba', 'pátio', 'ábaco', 'abada', 'abadá', 'abade', 'abafa', 'abafo', 'abalo',
        // Executa esta linha
        'abano', 'abate', 'abecê', 'abono', 'abril', 'acaju', 'ácaro', 'aceno', 'ácido', 'acuar', 'adaga', 'adega', 'adido', 'adobe', 'adubo', 'aedes',
        // Executa esta linha
        'aerar', 'aéreo', 'afear', 'afegã', 'afiar', 'afogo', 'afoxé', 'ágata', 'agave', 'agito', 'agogô', 'ágora', 'aguar', 'águas', 'aguça', 'águia',
        // Executa esta linha
        'aipim', 'aipos', 'aldeã', 'alemã', 'aliar', 'altar', 'altos', 'amapá', 'ameba', 'amido', 'amina', 'amino', 'amora', 'andas', 'anexa', 'anglo',
        // Executa esta linha
        'angra', 'anima', 'anime', 'ânion', 'anodo', 'ânodo', 'anual', 'anzol', 'aorta', 'apaga', 'apara', 'apito', 'apolo', 'apuro', 'árabe', 'arame',
        // Executa esta linha
        'arara', 'arder', 'arear', 'areca', 'arena', 'arnês', 'arpão', 'artes', 'aruba', 'ataca', 'atado', 'atear', 'atiça', 'ático', 'ativa', 'atlas',
        // Executa esta linha
        'átona', 'átono', 'atriz', 'aveia', 'avelã', 'avena', 'azara', 'azeda', 'azedo', 'babão', 'babar', 'babau', 'babel', 'bacia', 'bacon', 'baeta',
        // Executa esta linha
        'bafio', 'bagre', 'baião', 'baila', 'baile', 'baita', 'balão', 'balar', 'balde', 'balsa', 'bamba', 'bambo', 'bambu', 'banca', 'banco', 'banda',
        // Executa esta linha
        'banho', 'banir', 'banjo', 'bantu', 'baque', 'barba', 'barca', 'barco', 'barda', 'barra', 'basto', 'batel', 'batom', 'beato', 'beber', 'bebes',
        // Executa esta linha
        'bebum', 'beija', 'beira', 'belga', 'bemol', 'bento', 'beque', 'berço', 'berra', 'biela', 'bilha', 'bingo', 'biota', 'birmã', 'bisão', 'bispo',
        // Executa esta linha
        'blefe', 'bloco', 'blusa', 'boate', 'bobar', 'bocal', 'bocha', 'bócio', 'boina', 'bolão', 'bolar', 'bolas', 'boldo', 'bolha', 'bolor', 'bomba',
        // Executa esta linha
        'bonde', 'bórax', 'borda', 'bordo', 'borla', 'borra', 'bóson', 'botão', 'botim', 'botox', 'braça', 'braço', 'braga', 'brama', 'brasa', 'brita',
        // Executa esta linha
        'broca', 'broto', 'broxa', 'bruxo', 'bucal', 'bucha', 'bufão', 'bufar', 'bugio', 'bujão', 'bulbo', 'buque', 'buquê', 'buril', 'busto', 'butim',
        // Executa esta linha
        'búzio', 'cabra', 'cação', 'cacau', 'cacto', 'caiar', 'caída', 'caído', 'cairo', 'calar', 'calce', 'calço', 'caldo', 'calha', 'cálix', 'calva',
        // Executa esta linha
        'cambo', 'canal', 'canja', 'canoa', 'cante', 'capão', 'capar', 'capim', 'capuz', 'caqui', 'cáqui', 'carga', 'cárie', 'caril', 'carne', 'carnê',
        // Executa esta linha
        'carpa', 'carpo', 'casão', 'casca', 'casco', 'caspa', 'cassa', 'catar', 'caule', 'causo', 'cauto', 'cavar', 'cedro', 'cegar', 'celta', 'cento',
        // Executa esta linha
        'cerar', 'cerco', 'cerda', 'cerva', 'cervo', 'cesto', 'cetim', 'cevar', 'chalé', 'chapa', 'chega', 'chiar', 'chico', 'chile', 'chili', 'china',
        // Executa esta linha
        'chino', 'chita', 'choca', 'choco', 'chope', 'chora', 'choro', 'chulé', 'chupa', 'chuta', 'chute', 'ciano', 'cidra', 'cílio', 'cinco', 'cinta',
        // Executa esta linha
        'cinza', 'circo', 'círio', 'cisco', 'cisne', 'cisto', 'clama', 'clara', 'clave', 'clipe', 'clone', 'cloro', 'clube', 'coach', 'cobra', 'cobre',
        // Executa esta linha
        'coice', 'coifa', 'coiso', 'colar', 'colmo', 'cólon', 'color', 'conde', 'conga', 'copas', 'coque', 'corça', 'corço', 'corda', 'cores', 'corno',
        // Executa esta linha
        'corra', 'corre', 'corro', 'corsa', 'corta', 'corvo', 'costa', 'costo', 'cotar', 'cotas', 'cotia', 'coura', 'couro', 'couto', 'couve', 'coxim',
        // Executa esta linha
        'crack', 'cravo', 'crawl', 'creme', 'crepe', 'crina', 'cromo', 'crono', 'crush', 'cubar', 'cueca', 'cuíca', 'curar', 'cúria', 'curry', 'curta',
        // Executa esta linha
        'curto', 'curva', 'curvo', 'cusco', 'cuspe', 'cuspo', 'custa', 'cutia', 'damas', 'danar', 'dândi', 'danês', 'dardo', 'datar', 'dedão', 'dedar',
        // Executa esta linha
        'deita', 'delas', 'delta', 'dente', 'deque', 'dérbi', 'derby', 'derma', 'derme', 'deusa', 'diaba', 'díada', 'díade', 'diana', 'dieta', 'dinar',
        // Executa esta linha
        'dinda', 'dingo', 'diodo', 'dique', 'disco', 'disto', 'ditar', 'doado', 'dobar', 'dobra', 'dobre', 'dobro', 'dodói', 'doida', 'dólar', 'dólmã',
        // Executa esta linha
        'dolor', 'domar', 'donde', 'dores', 'dorna', 'dosar', 'dotar', 'draga', 'drink', 'drive', 'droga', 'drone', 'dublê', 'ducal', 'ducha', 'ducto',
        // Executa esta linha
        'duelo', 'dueto', 'dupla', 'duplo', 'duque', 'durão', 'durar', 'dúzia', 'édipo', 'edito', 'egito', 'ejeto', 'emoji', 'êmulo', 'envés', 'envio',
        // Executa esta linha
        'épica', 'érbio', 'érgio', 'errar', 'espia', 'esqui', 'esses', 'estai', 'éster', 'estou', 'etano', 'eteno', 'ethos', 'etila', 'etilo', 'étimo',
        // Executa esta linha
        'facão', 'fadar', 'falaz', 'falda', 'falho', 'falir', 'falto', 'falua', 'fanal', 'farda', 'farsi', 'fatão', 'fatia', 'fauce', 'fauno', 'febre',
        // Executa esta linha
        'fecal', 'fecha', 'fecho', 'feder', 'fedor', 'felpa', 'fêmea', 'fêmeo', 'fêmur', 'fenil', 'fênix', 'fenol', 'ferra', 'ferro', 'ferry', 'fetal',
        // Executa esta linha
        'fezes', 'fiada', 'fiado', 'fiapo', 'fibra', 'fiéis', 'filão', 'filar', 'filha', 'filhó', 'filme', 'finar', 'finca', 'finês', 'finta', 'finto',
        // Executa esta linha
        'fique', 'fisco', 'fisga', 'flama', 'flame', 'flash', 'flexo', 'floco', 'flúor', 'flush', 'fobia', 'focal', 'fofão', 'fogão', 'fogos', 'foice',
        // Executa esta linha
        'fólio', 'fonia', 'forca', 'forja', 'forno', 'forra', 'forró', 'fosca', 'fosco', 'foste', 'fóton', 'fóvea', 'foyer', 'fraca', 'frade', 'fraga',
        // Executa esta linha
        'frear', 'freio', 'fresa', 'frete', 'frevo', 'frisa', 'friso', 'frita', 'frito', 'front', 'fruta', 'fujão', 'fular', 'fulvo', 'fumar', 'funda',
        // Executa esta linha
        'funde', 'funga', 'fungo', 'funil', 'furão', 'furar', 'fúria', 'furna', 'furta', 'furto', 'fusca', 'fusco', 'fuzil', 'gabão', 'gaita', 'galão',
        // Executa esta linha
        'galês', 'galga', 'galgo', 'galha', 'galho', 'gálio', 'gamão', 'gamar', 'gambá', 'ganga', 'ganho', 'ganir', 'gansa', 'ganso', 'garça', 'garço',
        // Executa esta linha
        'garfa', 'garfo', 'garoa', 'garra', 'garua', 'gases', 'gasto', 'gávea', 'gelar', 'gêmeo', 'gesso', 'gesta', 'gibão', 'ginga', 'girar', 'glace',
        // Executa esta linha
        'glacê', 'globo', 'glote', 'gnose', 'goela', 'golfe', 'golfo', 'gongo', 'gordo', 'gorja', 'gorro', 'gosma', 'gozar', 'grade', 'grado', 'grafo',
        // Executa esta linha
        'grana', 'graxa', 'green', 'grega', 'grego', 'greve', 'grife', 'grifo', 'grill', 'grita', 'grito', 'grude', 'gruta', 'guano', 'guapo', 'guará',
        // Executa esta linha
        'guião', 'guiar', 'guiné', 'guita', 'guizo', 'harpa', 'hedge', 'hélio', 'hélix', 'hepta', 'herma', 'hertz', 'hidra', 'hidro', 'hiena', 'hindi',
        // Executa esta linha
        'hindu', 'honor', 'horas', 'horta', 'hotel', 'hulha', 'húmus', 'hurra', 'husky', 'ilhéu', 'ilhós', 'iluso', 'imago', 'imame', 'índia', 'infra',
        // Executa esta linha
        'íngua', 'input', 'iogue', 'iscar', 'islão', 'istmo', 'ítrio', 'jacto', 'janta', 'jante', 'japão', 'jarda', 'jarra', 'jarro', 'jaspe', 'jaula',
        // Executa esta linha
        'jeans', 'jegue', 'jeová', 'jeque', 'jesus', 'jetom', 'jihad', 'jogue', 'jóias', 'jongo', 'jorra', 'jorro', 'joule', 'judas', 'judia', 'juíza',
        // Executa esta linha
        'julho', 'jumbo', 'junça', 'junho', 'junta', 'jurar', 'kanji', 'karma', 'kebab', 'kendo', 'khmer', 'kraft', 'krill', 'lábil', 'lábio', 'lacre',
        // Executa esta linha
        'ladra', 'ladro', 'lagoa', 'lajem', 'lança', 'lance', 'laquê', 'larva', 'lasca', 'laser', 'latão', 'látex', 'latim', 'latir', 'lauda', 'lebre',
        // Executa esta linha
        'legar', 'lêmur', 'lenço', 'lenha', 'lenho', 'lente', 'leoas', 'leque', 'lerdo', 'lesar', 'lesma', 'leste', 'letão', 'lhama', 'lhano', 'limão',
        // Executa esta linha
        'limar', 'limpa', 'lince', 'linfa', 'linho', 'lírio', 'lista', 'lítio', 'litro', 'livra', 'lixão', 'lixar', 'lobby', 'loção', 'locar', 'login',
        // Executa esta linha
        'logon', 'loira', 'loiro', 'lomba', 'lombo', 'longa', 'lorde', 'lotar', 'lótus', 'loura', 'lúmen', 'lunar', 'lupas', 'lúpus', 'lúteo', 'luvas',
        // Executa esta linha
        'luxar', 'luzir', 'maçom', 'madre', 'máfia', 'magma', 'magno', 'magra', 'magro', 'major', 'malar', 'malha', 'malho', 'malte', 'malva', 'mamão',
        // Executa esta linha
        'mamar', 'manco', 'manda', 'mando', 'manta', 'março', 'maria', 'marra', 'marta', 'marte', 'match', 'meada', 'meado', 'mecha', 'media', 'média',
        // Executa esta linha
        'médio', 'melão', 'melar', 'menor', 'menta', 'mento', 'méson', 'metal', 'meter', 'metro', 'metrô', 'miada', 'miado', 'micra', 'micro', 'migar',
        // Executa esta linha
        'milha', 'milho', 'miolo', 'mioma', 'mirar', 'mirim', 'mirra', 'missa', 'missô', 'mitra', 'miúdo', 'mixar', 'mixer', 'móbil', 'modem', 'moeda',
        // Executa esta linha
        'moela', 'mofar', 'mofos', 'mogno', 'moído', 'moita', 'molar', 'molha', 'molhe', 'monja', 'morbo', 'morna', 'morno', 'morsa', 'morse', 'morto',
        // Executa esta linha
        'mosca', 'motel', 'motor', 'moura', 'mouro', 'mouse', 'mudez', 'mufla', 'múmia', 'munir', 'mural', 'murar', 'murro', 'murta', 'musgo', 'musse',
        // Executa esta linha
        'mutum', 'nacre', 'nadar', 'nafta', 'naipe', 'nardo', 'nasal', 'nauta', 'naval', 'negra', 'nervo', 'netos', 'neura', 'neuro', 'nevão', 'nevar',
        // Executa esta linha
        'névoa', 'ninfa', 'ninho', 'ninja', 'nisei', 'nisso', 'nisto', 'nitro', 'níveo', 'nobel', 'nodal', 'noiva', 'noivo', 'norte', 'notar', 'novel',
        // Executa esta linha
        'novos', 'núbil', 'nudez', 'nurse', 'nylon', 'obeso', 'obrar', 'óculo', 'odeão', 'oeste', 'ofega', 'ofego', 'ogiva', 'oitão', 'olear', 'ombro',
        // Executa esta linha
        'ômega', 'opala', 'ópera', 'orçar', 'orgia', 'orixá', 'orlar', 'ósseo', 'ossos', 'ostra', 'ótico', 'otite', 'ovada', 'ovado', 'ovino', 'óvulo',
        // Executa esta linha
        'óxido', 'padre', 'pager', 'palco', 'palha', 'pálio', 'palma', 'palmo', 'palpo', 'pampa', 'panda', 'papai', 'papal', 'papão', 'papar', 'parda',
        // Executa esta linha
        'parir', 'parka', 'parra', 'parto', 'passe', 'pasta', 'pasto', 'patão', 'patuá', 'pausa', 'pavão', 'pavio', 'pecar', 'pedal', 'pegão', 'pejar',
        // Executa esta linha
        'pelar', 'pente', 'perca', 'perla', 'perna', 'perro', 'persa', 'perua', 'pesca', 'piaba', 'piano', 'picar', 'picho', 'picto', 'piela', 'pifão',
        // Executa esta linha
        'pifar', 'pilão', 'pilha', 'pinça', 'pingo', 'pinha', 'pinta', 'pinto', 'piora', 'pirão', 'pirar', 'pires', 'pisca', 'pisco', 'pista', 'pitão',
        // Executa esta linha
        'pitar', 'plató', 'plexo', 'plush', 'poção', 'podre', 'polca', 'pólen', 'polia', 'pólio', 'polir', 'polme', 'polpa', 'polvo', 'pomba', 'pombo',
        // Executa esta linha
        'ponta', 'ponte', 'porão', 'porco', 'porre', 'porto', 'posar', 'poser', 'posta', 'poste', 'potra', 'potro', 'pouca', 'poupa', 'pousa', 'pouso',
        // Executa esta linha
        'praça', 'prata', 'prato', 'prega', 'prego', 'prelo', 'preta', 'prima', 'primo', 'prior', 'priva', 'prono', 'provo', 'púbis', 'pudim', 'púgil',
        // Executa esta linha
        'pulga', 'pulso', 'punga', 'punho', 'punir', 'purga', 'puxão', 'quark', 'quati', 'quedo', 'queen', 'quepe', 'quibe', 'quilo', 'quina', 'quita',
        // Executa esta linha
        'quite', 'quito', 'quivi', 'ração', 'racha', 'radar', 'raglã', 'raiar', 'raide', 'raiom', 'raios', 'rajar', 'ralar', 'ralho', 'rally', 'ramal',
        // Executa esta linha
        'ramos', 'rampa', 'rango', 'ranho', 'rapar', 'rapel', 'rapto', 'raque', 'rasar', 'rasgo', 'raspa', 'rasta', 'rasto', 'ratão', 'razia', 'reata',
        // Executa esta linha
        'recta', 'recto', 'recua', 'recuo', 'rédea', 'redox', 'refez', 'refil', 'regar', 'régia', 'régua', 'reich', 'reiki', 'relax', 'relha', 'remar',
        // Executa esta linha
        'remix', 'renal', 'repto', 'resma', 'retal', 'retor', 'retos', 'retrô', 'reuma', 'revir', 'riçar', 'rifar', 'rifle', 'rimar', 'rimas', 'rímel',
        // Executa esta linha
        'rinha', 'ripar', 'risca', 'rixar', 'rocio', 'rodar', 'ródio', 'roído', 'rojão', 'rolar', 'rolha', 'rombo', 'romeu', 'ronca', 'ronco', 'ronda',
        // Executa esta linha
        'ronha', 'roque', 'rosar', 'rosca', 'róseo', 'rosto', 'rotar', 'rotor', 'roubo', 'rouco', 'rouge', 'rublo', 'rubor', 'rudez', 'ruela', 'rufar',
        // Executa esta linha
        'rugar', 'rúgbi', 'rugby', 'rugir', 'ruiva', 'ruivo', 'rumar', 'rumba', 'rúmen', 'rupia', 'rusga', 'russo', 'sabão', 'sabre', 'sachê', 'sacro',
        // Executa esta linha
        'safar', 'safra', 'saído', 'salão', 'salga', 'salsa', 'salto', 'sanha', 'santa', 'saque', 'saqué', 'saquê', 'sarar', 'sarda', 'sardo', 'sarja',
        // Executa esta linha
        'sarna', 'sarro', 'sauna', 'saúna', 'saúva', 'secar', 'sedan', 'sedar', 'selim', 'selva', 'sêmen', 'senha', 'sépia', 'septo', 'serra', 'serva',
        // Executa esta linha
        'sheik', 'short', 'shoyu', 'sidra', 'sifão', 'sigma', 'signa', 'sílex', 'silfa', 'silfo', 'silva', 'símil', 'síria', 'sírio', 'sisal', 'sismo',
        // Executa esta linha
        'skate', 'slack', 'slide', 'soada', 'sobra', 'socar', 'sódio', 'sogra', 'sogro', 'solar', 'solda', 'somar', 'sonar', 'sonda', 'sopor', 'sopro',
        // Executa esta linha
        'sorgo', 'sorva', 'sousa', 'sovar', 'spray', 'staff', 'still', 'strip', 'suado', 'sucre', 'sueca', 'sueco', 'suede', 'suflê', 'suíça', 'suíço',
        // Executa esta linha
        'suíno', 'suíte', 'sujar', 'sulfa', 'súper', 'surda', 'surdo', 'surfe', 'surra', 'sushi', 'susto', 'sutiã', 'sutra', 'swell', 'tabla', 'tabua',
        // Executa esta linha
        'tábua', 'tacão', 'tacar', 'tacho', 'tacto', 'taifa', 'taipa', 'talão', 'talar', 'talco', 'talha', 'talhe', 'talho', 'tampa', 'tampo', 'tanga',
        // Executa esta linha
        'tango', 'tapar', 'tapir', 'tapiz', 'tarar', 'tardo', 'tarja', 'tarso', 'tatos', 'tatuí', 'taxar', 'táxis', 'táxon', 'tecla', 'tecno', 'teima',
        // Executa esta linha
        'teína', 'teipe', 'telão', 'telar', 'telex', 'telha', 'telho', 'temão', 'tenda', 'tênia', 'tenor', 'tensa', 'tense', 'tenta', 'tente', 'tergo',
        // Executa esta linha
        'tesar', 'tesla', 'testa', 'testo', 'tetas', 'tiara', 'tíbia', 'tíbio', 'ticar', 'tietê', 'tifão', 'tigre', 'tília', 'timão', 'tinir', 'tinta',
        // Executa esta linha
        'tinto', 'tipói', 'tique', 'tirão', 'titia', 'titio', 'tocha', 'togas', 'tolda', 'toldo', 'tolho', 'tomba', 'tombo', 'tonal', 'tonar', 'tonel',
        // Executa esta linha
        'toner', 'tonga', 'tonta', 'tonto', 'tônus', 'topar', 'topaz', 'tórax', 'torce', 'tordo', 'torno', 'torra', 'torre', 'torta', 'torto', 'tosse',
        // Executa esta linha
        'total', 'totem', 'touca', 'touro', 'traça', 'trair', 'trans', 'trapa', 'trapo', 'trava', 'trave', 'travo', 'treco', 'trela', 'trema', 'trena',
        // Executa esta linha
        'treno', 'trenó', 'trepa', 'treva', 'trevo', 'treze', 'triar', 'tricô', 'trigo', 'trino', 'tripa', 'tripé', 'trole', 'trono', 'tropa', 'trote',
        // Executa esta linha
        'trova', 'trufa', 'truta', 'tufão', 'tufar', 'tulha', 'tumor', 'túnel', 'tunga', 'turbo', 'turca', 'turco', 'turfa', 'turfe', 'turnê', 'turno',
        // Executa esta linha
        'turra', 'tweed', 'twist', 'uivar', 'ultra', 'úmero', 'unção', 'ungir', 'unido', 'untar', 'urano', 'ureia', 'uréia', 'úrico', 'urina', 'urrar',
        // Executa esta linha
        'urubu', 'urutu', 'usado', 'usina', 'usque', 'usual', 'útero', 'úvula', 'vagão', 'vagem', 'vaiar', 'valeu', 'valsa', 'vapor', 'varal', 'varar',
        // Executa esta linha
        'vária', 'variz', 'vasco', 'vazar', 'veado', 'venda', 'venta', 'vênus', 'veras', 'veraz', 'verga', 'verme', 'vespa', 'veste', 'vexar', 'vidão',
        // Executa esta linha
        'vidro', 'viela', 'vígil', 'vilar', 'vinca', 'vinco', 'vinda', 'vindo', 'vinho', 'vinil', 'vinte', 'viola', 'viral', 'virgo', 'visco', 'visgo',
        // Executa esta linha
        'visom', 'visor', 'viúva', 'viúvo', 'voada', 'vocal', 'vodca', 'vogal', 'vogar', 'vôlei', 'votar', 'xerox', 'xérox', 'xogum', 'zanga', 'zebra',
        // Executa esta linha
        'zerar', 'zíper', 'zonzo', 'zorra', 'zorro', 'zunir',
    // Executa esta linha
    ];

    // Define uma função
    public function iniciarJogo()
    // Executa esta linha
    {
        // Define ou atualiza uma variável
        $idJogo = Str::uuid()->toString();

        // Define ou atualiza uma variável
        $palavra = $this->palavras[array_rand($this->palavras)];

        // Executa esta linha
        Cache::put($idJogo, [
            // Define uma função
            "palavra" => $palavra,
            // Define uma função
            "tentativas" => 0
        // Executa esta linha
        ], now()->addHours(1));

        // Retorna um valor
        return response()->json([
            // Define uma função
            "idJogo" => $idJogo,
            // Define uma função
            "tamanhoPalavra" => 5,
            // Define uma função
            "tentativasMaximas" => 6
        // Executa esta linha
        ]);
    // Executa esta linha
    }

    // Define uma função
    public function validarTentativa(Request $request)
// Executa esta linha
{
    // Define ou atualiza uma variável
    $idJogo = $request->idJogo;

    // Define ou atualiza uma variável
    $palavra = strtolower($request->palavra);

    // Verifica se a palavra tem 5 letras
    // Verifica uma condição
    if (strlen($palavra) != 5) {
        // Retorna um valor
        return response()->json([
            // Define uma função
            "erro" => "A palavra deve ter 5 letras"
        // Executa esta linha
        ], 400);
    // Executa esta linha
    }

    // Busca o jogo no cache
    // Define ou atualiza uma variável
    $jogo = Cache::get($idJogo);

    // Verifica se o jogo existe
    // Verifica uma condição
    if (!$jogo) {
        // Retorna um valor
        return response()->json([
            // Define uma função
            "erro" => "Jogo não encontrado"
        // Executa esta linha
        ], 404);
    // Executa esta linha
    }

    // Verifica se a palavra existe na lista
    // Verifica uma condição
    if (!in_array($palavra, $this->palavras)) {
        // Retorna um valor
        return response()->json([
            // Define uma função
            "erro" => "Palavra inválida"
        // Executa esta linha
        ], 400);
    // Executa esta linha
    }

    // Define ou atualiza uma variável
    $palavraCorreta = $jogo["palavra"];

    // Define ou atualiza uma variável
    $resultado = [];

    // Verifica letra por letra
    // Executa um loop
    for ($i = 0; $i < 5; $i++) {

        // Define ou atualiza uma variável
        $letra = $palavra[$i];

        // Verifica uma condição
        if ($letra == $palavraCorreta[$i]) {
            // Define ou atualiza uma variável
            $status = "correta";
        // Verifica uma condição
        } elseif (str_contains($palavraCorreta, $letra)) {
            // Define ou atualiza uma variável
            $status = "presente";
        // Executa esta linha
        } else {
            // Define ou atualiza uma variável
            $status = "ausente";
        // Executa esta linha
        }

        // Define ou atualiza uma variável
        $resultado[] = [
            // Define uma função
            "letra" => $letra,
            // Define uma função
            "status" => $status
        // Executa esta linha
        ];
    // Executa esta linha
    }

    // Soma tentativa
    // Executa esta linha
    $jogo["tentativas"]++;

    // Atualiza cache
    // Executa esta linha
    Cache::put($idJogo, $jogo, now()->addHours(1));

    // Verifica vitória
    // Define ou atualiza uma variável
    $venceu = $palavra === $palavraCorreta;

    // Verifica derrota
    // Define ou atualiza uma variável
    $perdeu = $jogo["tentativas"] >= 6 && !$venceu;

    // Retorna um valor
    return response()->json([
        // Define uma função
        "resultado" => $resultado,
        // Define uma função
        "venceu" => $venceu,
        // Define uma função
        "perdeu" => $perdeu,
        // Define uma função
        "tentativasRestantes" => 6 - $jogo["tentativas"],
        // Define uma função
        "palavraValida" => true
    // Executa esta linha
    ]);
// Executa esta linha
}   

// Executa esta linha
}