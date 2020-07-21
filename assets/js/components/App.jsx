import React from 'react'; 

export class App extends React.Component{

    databaseValues = null; 

    state = {

        // category        : '', 
        search          : '',
        searchResults   : [ ]
    }

    componentDidMount() {

        let url;

        // if(this.state.category == '') {
            url = '/api/dechets';
        // }
        // else {
        //     url = `/api/dechets/categories/${this.state.category}`;
        // }

        window.fetch(url).then((response) => {
            return response.json();
        }).then((databaseValues) => {
            //console.log(databaseValues); 
            this.databaseValues = databaseValues;
            console.log(this.databaseValues); 
        }); 
            
    }

    onChangeInput = (event) => {

        //On crée une variable pour récupérer la saisie
        let search = event.target.value.trim().toLowerCase();
        //console.log(search); 

        let searchResults = [ ]; 

        //console.log(this.databaseValues);
        
        //Enregistrement de la saisie utilisateur 
        this.setState({ search : event.target.value});
        
        //y'a t-il une recherche qui correspond à nos données dans le champ de recherche
        if(search.length == 0){

            //Non, donc on efface les résultats de la recherche sans actualiser
            this.setState({ searchResults : [] });

            //Et on quitte immédiatement (return différent de break, break quitte juste la structure ex quitte une boucle for dans une autre boucle for, alors que return quitte tout.)
            return; 
        }

        for(const value of this.databaseValues){
            
            // console.log(value, search, value.toLowerCase().includes(search)); 
            
            if( value.name.toLowerCase().includes(search) == true ){
                
                searchResults.push(value); 

            }
        }

        console.log(searchResults); 
        // <iframe src="{{ dechetterie.urlGoogleMap }}"></iframe>
        if(searchResults.length == 0) {

            searchResults = <p>Aucun résultat trouvé</p>;
        }
        else {

            //On peut se passer des accolades et du return si on a qu'une seule ligne de code et que cette ligne est un return 
            searchResults = searchResults.map((searchResult, index) => <div>
                <p key={index}><a href={searchResult.url}>{searchResult.name}</a></p>
                <p key={index}><a href={searchResult.url}>{searchResult.categoryName}</a></p>
                </div>); 
        }
        
        //Enregistrement de la saisie utilisateur 
        this.setState({ searchResults : searchResults });
    }
    
    onSubmit = (event) => {

        event.preventDefault(); 
    }; 
    
    render(){

        return(
            <section>
                <form onSubmit = {this.onSubmit}>
                    <div className="input-group mb-0 mx-auto largeur">
                        <input
                            onChange= {this.onChangeInput} 
                            value= {this.state.search}
                            className='form-control searchbar'
                            placeholder="Tapez un type de déchet"
                            aria-label="Tapez un type de déchet"
                            aria-describedby="button-addon2"
                        />
                        <div className="input-group-append">
                            <button
                                className="btn btn-outline-secondary btncustom"
                                type="button"
                                id="button-addon2"
                            >
                                Go!
                            </button>
                        </div>
                    </div>
                    { this.state.searchResults.length > 0 &&
                        <div className="input-group mx-auto largeur">
                            <article className="search-result">
                                { this.state.searchResults }
                            </article>
                        </div>
                    }
                </form>
            </section>                    
        ); 
        
    }


}

