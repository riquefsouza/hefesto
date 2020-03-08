using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;

namespace hefesto_dotnet_webapi.Models
{
    public class User
    {
        [Key]
        public int Id { get; set; }

        [Required(ErrorMessage = "Este campo é obrigatório")]
        [MaxLength(100, ErrorMessage = "Este campo deve conter entre 5 e 100 caracteres")]
        [MinLength(5, ErrorMessage = "Este campo deve conter entre 5 e 100 caracteres")]
        public string UserName { get; set; }

        [Required(ErrorMessage = "Este campo é obrigatório")]
        [MaxLength(100, ErrorMessage = "Este campo deve conter entre 5 e 100 caracteres")]
        [MinLength(5, ErrorMessage = "Este campo deve conter entre 5 e 100 caracteres")]
        public string Password { get; set; }

        public bool Active { get; set; }

        [Required(ErrorMessage = "Este campo é obrigatório")]
        [Range(1, int.MaxValue, ErrorMessage = "Perfil inválido")]
        public int RoleId { get; set; }

        public Role Role { get; set; }

    }
}