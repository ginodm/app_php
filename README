# PHP MVC Framework (Didattico)

Framework MVC minimale sviluppato in **PHP puro**, creato a scopo didattico
per comprendere il funzionamento interno dell’architettura
**Model – View – Controller (MVC)** senza l’uso di framework o librerie esterne.

Il progetto utilizza **Docker** per fornire un ambiente di sviluppo
semplice, isolato e riproducibile.

---

## 🎯 Obiettivi del progetto

- Comprendere il pattern architetturale **MVC**
- Capire il ruolo del **Front Controller**
- Gestire il **routing** delle richieste HTTP
- Separare correttamente logica, dati e presentazione
- Studiare come funziona un framework PHP "da zero"

---

## 🧠 Architettura MVC

- **Model**  
  Gestisce i dati e la logica di business.

- **View**  
  Si occupa esclusivamente della presentazione (HTML).

- **Controller**  
  Riceve la richiesta, coordina Model e View e restituisce la risposta.

### Flusso di una richiesta

Browser → public/index.php → Router → Controller → View → Browser

---

## 📁 Struttura del progetto

project-root/
│
├── app/
│ ├── Controllers/ → Controller applicativi
│ ├── Models/ → Modelli
│ └── Views/ → Template delle viste
│
├── core/ → Classi base del framework
├── public/ → Front Controller (index.php)
├── config/ → File di configurazione
├── docker/ → Configurazione ambiente Docker
│
├── docker-compose.yml
├── README.md
└── LICENSE


---

## 🚀 Avvio del progetto con Docker

### Requisiti
- Docker
- Docker Compose

### Avvio
```bash
docker-compose up --build

apri il browser su: http://localhost:8080/
