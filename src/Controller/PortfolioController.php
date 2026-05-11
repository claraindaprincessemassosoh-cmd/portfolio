<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class PortfolioController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function accueil(): Response
    {
        $competences = [
            ['code' => 'RT1', 'titre' => 'Administrer les réseaux et l\'Internet', 'desc' => 'Cisco IOS · VLANs · RIP v2 · NAT/PAT · ACLs · VLSM'],
            ['code' => 'RT2', 'titre' => 'Connecter les entreprises et les usagers', 'desc' => 'Transmissions · ToIP · LabVIEW · Filtres RC/RLC · Signaux'],
            ['code' => 'RT3', 'titre' => 'Créer des outils et applications', 'desc' => 'Python · Docker · Bash · SQL · MongoDB · VMware'],
        ];

        $technologies = [
            'Cisco IOS', 'Packet Tracer', 'VLANs 802.1Q', 'RIP v2',
            'NAT/PAT', 'ACLs', 'VMware ESXi', 'Docker', 'Linux',
            'Windows Server', 'DNS', 'Python', 'MongoDB', 'SQL', 'LabVIEW', 'Bash',
        ];

        return $this->render('accueil/index.html.twig', [
            'competences' => $competences,
            'technologies' => $technologies,
        ]);
    }

    #[Route('/competences', name: 'competences')]
    public function competences(): Response
    {
        $rt1 = [
            'titre' => 'Administrer les réseaux et l\'Internet',
            'desc' => 'Configuration et administration d\'équipements Cisco physiques et en simulation (Packet Tracer). Maîtrise de la segmentation VLAN, du routage, du NAT/PAT et des ACLs. Projet SAE 21 : architecture multi-sites complète.',
            'tags' => ['Cisco 2960', 'Cisco 1941', 'Packet Tracer', 'SAE 21', 'R201', 'CCNA 2'],
            'tags_done' => ['Cisco 2960', 'Cisco 1941', 'Packet Tracer'],
            'acs' => [
                ['code' => 'AC11.01', 'texte' => 'Maîtriser les lois fondamentales de l\'électricité afin d\'intervenir sur des équipements de réseaux et télécommunications', 'done' => true],
                ['code' => 'AC11.02', 'texte' => 'Comprendre l\'architecture et les fondements des systèmes numériques, les principes du codage de l\'information, des communications et de l\'Internet', 'done' => true],
                ['code' => 'AC11.03', 'texte' => 'Configurer les fonctions de base du réseau local', 'done' => true],
                ['code' => 'AC11.04', 'texte' => 'Maîtriser les rôles et les principes fondamentaux des systèmes d\'exploitation afin d\'interagir avec ceux-ci pour la configuration et l\'administration des réseaux et services fournis', 'done' => true],
                ['code' => 'AC11.05', 'texte' => 'Savoir identifier les dysfonctionnements du réseau local', 'done' => true],
                ['code' => 'AC11.06', 'texte' => 'Installer un poste client, expliquer la procédure mise en place', 'done' => true],
            ],
        ];

        $rt2 = [
            'titre' => 'Connecter les entreprises et les usagers',
            'desc' => 'Mesure et analyse des signaux analogiques/numériques avec LabVIEW. Filtres RC et RLC, théorie de Shannon-Nyquist, chiffrement audio (technique Canal+). Supports de transmission et introduction à la ToIP.',
            'tags' => ['LabVIEW', 'Tektronix TDS 2012B', 'DAQ Assistant', 'R2.05', 'R2.06'],
            'tags_done' => ['LabVIEW', 'Tektronix TDS 2012B', 'DAQ Assistant'],
            'acs' => [
                ['code' => 'AC12.01', 'texte' => 'Mesurer et analyser les signaux', 'done' => true],
                ['code' => 'AC12.02', 'texte' => 'Caractériser des systèmes de transmissions élémentaires et découvrir la modélisation mathématique de leur fonctionnement', 'done' => true],
                ['code' => 'AC12.03', 'texte' => 'Déployer des supports de transmission', 'done' => true],
                ['code' => 'AC12.04', 'texte' => 'Connecter les systèmes de ToIP', 'done' => true],
                ['code' => 'AC12.05', 'texte' => 'Communiquer avec un tiers (client, collaborateur...) et adapter son discours et sa langue à son interlocuteur', 'done' => true],
            ],
        ];

        $rt3 = [
            'titre' => 'Créer des outils et applications informatiques pour les R&T',
            'desc' => 'Déploiement de VMs VMware, conteneurisation Docker, scripting Bash automatisé. Bases de données SQL (Access) et NoSQL (MongoDB). Programmation Python et intégration dans un environnement collaboratif.',
            'tags' => ['Python', 'Docker', 'Bash', 'MongoDB', 'R202', 'M2103', 'R2.07'],
            'tags_done' => ['Python', 'Docker', 'Bash', 'MongoDB'],
            'acs' => [
                ['code' => 'AC13.01', 'texte' => 'Utiliser un système informatique et ses outils', 'done' => true],
                ['code' => 'AC13.02', 'texte' => 'Lire, exécuter, corriger et modifier un programme', 'done' => true],
                ['code' => 'AC13.03', 'texte' => 'Traduire un algorithme, dans un langage et pour un environnement donné', 'done' => true],
                ['code' => 'AC13.04', 'texte' => 'Connaître l\'architecture et les technologies d\'un site Web', 'done' => true],
                ['code' => 'AC13.05', 'texte' => 'Choisir les mécanismes de gestion de données adaptés au développement de l\'outil et argumenter ses choix', 'done' => true],
                ['code' => 'AC13.06', 'texte' => 'S\'intégrer dans un environnement propice au développement et au travail collaboratif', 'done' => true],
            ],
        ];

        return $this->render('competences/index.html.twig', [
            'rt1' => $rt1,
            'rt2' => $rt2,
            'rt3' => $rt3,
        ]);
    }

    #[Route('/hobbies', name: 'hobbies')]
    public function hobbies(): Response
    {
        $hobbies = [
            [
                'icon' => 'ti-swimming',
                'nom' => 'Natation',
                'couleur' => '#3b9eff',
                'desc' => 'La natation est ma façon de me ressourcer et de garder un équilibre entre les études et la vie personnelle. Un sport complet qui développe la rigueur et la persévérance.',
                'tags' => ['Endurance', 'Discipline', 'Sport complet'],
            ],
            [
                'icon' => 'ti-chef-hat',
                'nom' => 'Cuisine',
                'couleur' => '#f59e0b',
                'desc' => 'J\'adore expérimenter de nouvelles recettes et cuisiner pour les autres. La cuisine, c\'est de la créativité, de la précision et beaucoup de partage.',
                'tags' => ['Créativité', 'Partage', 'Précision'],
            ],
            [
                'icon' => 'ti-scissors',
                'nom' => 'Coiffure',
                'couleur' => '#d4537e',
                'desc' => 'La coiffure est un art que j\'ai développé au fil du temps. Tresser, coiffer, créer des styles — une passion qui allie créativité et soin du détail.',
                'tags' => ['Art', 'Soin', 'Expression'],
            ],
            [
                'icon' => 'ti-book',
                'nom' => 'Lecture',
                'couleur' => '#22c55e',
                'desc' => 'Lire me permet d\'élargir ma vision du monde et de me cultiver. Romans, développement personnel ou livres techniques — toujours un livre en cours.',
                'tags' => ['Culture', 'Curiosité', 'Apprentissage'],
            ],
        ];

        return $this->render('hobbies/index.html.twig', [
            'hobbies' => $hobbies,
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(): Response
    {
        return $this->render('contact/index.html.twig', [
            'github' => 'claraindaprincessemassosoh-cmd',
            'localisation' => 'Saint-Étienne / Roanne, France',
            'formation' => 'IUT de Roanne · BUT R&T',
        ]);
    }
}
