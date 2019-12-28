#!/bin/bash
local="Développement"
prod="Production"

# A menu driven shell script sample template
## ----------------------------------
# Step #1: Define variables
# ----------------------------------
EDITOR=vim
PASSWD=/etc/passwd
RED='\033[0;31m'
NC='\033[0m'

# VERBOSE=true
DB_DATABASE="promo3"
DB_USERNAME="root"
DB_PASSWORD="password"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost

createEnvLocal() {
    read -p "Database name: "  DB_DATABASE
    echo "=> $DB_DATABASE\n"
    read -p "Database username: "  DB_USERNAME
    echo "=> $DB_USERNAME\n"
    read -p "Database password: "  DB_PASSWORD
    echo "=> $DB_PASSWORD\n"

    echo "\nCréation des variables d'environnements...\n"
    rm .env
    cp .env.example .env
    sed -i "s/DB_DATABASE=promo3/DB_DATABASE=${DB_DATABASE}/g" .env
    sed -i "s/DB_USERNAME=homestead/DB_USERNAME=${DB_USERNAME}/g" .env
    sed -i "s/DB_PASSWORD=secret/DB_PASSWORD=${DB_PASSWORD}/g" .env
}

createEnvProd() {
    echo "\nChargement d'un environnement de production...\n"
    sed -i "s/APP_ENV=local/APP_ENV=production/g" .env
    sed -i "s/APP_DEBUG=true/APP_DEBUG=false/g" .env
}

install(){
    echo "\nDépendances de composer en téléchargement...\n"
    composer install -q
    echo "\nMigration de la base de données en cours...\n"
    # php artisan migrate:fresh --seed -n --force -q
    php artisan migrate:fresh --seed -n --force
    echo "\nGénération de la clé... #kingdom-heart-trou-de-serrure-bouyah\n"
    php artisan key:generate
    echo "\nMise en place du lien symbolique du répertoire storage...\n"
    php artisan storage:link
}

installNodeDep() {
    echo "\nDépendances de NodeJS en téléchargement...\n"
    # yarn --silent
    yarn
    echo "\nLancement de Mix...\n"
    # yarn run dev --silent
    yarn run dev
}

# ----------------------------------
# Step #2: User defined function
# ----------------------------------
pause(){
  read -p "Press [Enter] key to continue..." fackEnterKey
}

dev(){
    echo "\nVous avez choisi le mode de ${local}\n"
        createEnvLocal
        install
        installNodeDep
        echo "\nVotre application est prête...\n"
        php artisan serve
}

# do something in two()
prod(){
	echo "\nVous avez choisi le mode de ${prod}\n"
        createEnvLocal
        createEnvProd
        install
        exit 0
}

local="développement"
prod="production"
# function to display menus
show_menus() {
	clear
	echo "~~~~~~~~~~~~~~~~~~~~~"
	echo " Site de promo #3"
    echo " "
    echo " Choisissez votre"
    echo " mode d'installation"
	echo "~~~~~~~~~~~~~~~~~~~~~"
	echo "1. Mode ${local}"
	echo "2. Mode ${prod}"
	echo "3. Quitter"
    echo " "
}
# read input from the keyboard and take a action
# invoke the one() when the user select 1 from the menu option.
# invoke the two() when the user select 2 from the menu option.
# Exit when user the user select 3 form the menu option.
read_options(){
	local choice
    echo "Sélectionner un chiffre de 1 à 3"
	read -p "=> " choice
	case $choice in
		1) dev ;;
		2) prod ;;
		3) exit 0;;
		*) echo -e "${RED}Error...${STD}" && sleep 2
	esac
}

# ----------------------------------------------
# Step #3: Trap CTRL+C, CTRL+Z and quit singles
# ----------------------------------------------
trap '' SIGINT SIGQUIT SIGTSTP

# -----------------------------------
# Step #4: Main logic - infinite loop
# ------------------------------------
while true
do

	show_menus
	read_options
done
